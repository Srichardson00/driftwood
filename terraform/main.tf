########################################################################################
#PROVIDER CONFIGURATION

terraform {
  required_providers {
	aws = {
		source = "hashicorp/aws"
		version = "~> 5.0"
	}
  }
}

provider "aws" {
  region = var.aws_region
}

#VPC BUILD

resource "aws_vpc" "lamp_vpc" {
  cidr_block           = "10.0.0.0/16"
  enable_dns_hostnames = true
  tags = { Name = "lamp_vpc"}
}

#PUBLIC SUBNET

resource "aws_subnet" "lamp_subnet" {
  vpc_id                  = aws_vpc.lamp_vpc.id
  cidr_block              = "10.0.1.0/24"
  map_public_ip_on_launch = true
  tags = { Name = "lamp-igw" }
}

#INTERNET GATEWAY

resource "aws_internet_gateway" "lamp_igw" {
  vpc_id = aws_vpc.lamp_vpc.id
  tags = { Name = "lamp-igw"}
}

resource "aws_route_table" "lamp_rt" {
  vpc_id = aws_vpc.lamp_vpc.id
  route {
	cidr_block = "0.0.0.0/0"
	gateway_id = aws_internet_gateway.lamp_igw.id
  }
  tags = { Name = "lamp_rt"}
}

resource "aws_route_table_association" "lamp_rta" {
  subnet_id = aws_subnet.lamp_subnet.id
  route_table_id = aws_route_table.lamp_rt.id
}

####################################################################
#FIREWALL CONFIGURATION

resource "aws_security_group" "lamp_sg" {
  name = "lamp-security-group"
  vpc_id = aws_vpc.lamp_vpc.id

  ingress {
	description = "Allow HTTP"
	from_port = 80
	to_port = 80
	protocol = "tcp"
	cidr_blocks = ["0.0.0.0/0"]
  }

  ingress {
	description = "Allow SSH"
	from_port = 22
	to_port = 22
	protocol = "tcp"
	cidr_blocks = ["0.0.0.0/0"]
  }

  egress {
	from_port = 0
	to_port = 0
	protocol = "-1"
	cidr_blocks = ["0.0.0.0/0"]
  }

  tags = { Name = "lamp-sg"}
}


################################################################################
#EC2 INSTANCE SETUP

resource "aws_instance" "lamp_server" {
  ami                    = "ami-0797542918da874fe"
  instance_type          = var.instance-type
  subnet_id              = aws_subnet.lamp_subnet.id
  vpc_security_group_ids = [aws_security_group.lamp_sg.id]

  user_data = <<-EOF
			  #!/bin/bash
			  export DEBIAN_FRONTEND=noninteractive
			  apt-get update -y
			  apt-install -y apache2 mysql-server php libapache2-mod-php php-mysql

			  systemctl start apache2
			  systemctl enable apache2
			  systemctl start mysql
			  systemctl enaable mysql

			  echo "<?php echo 'LAMP Stack provisioned successfully via Terraform!'; ?>" > /var/www/html/index.php
              rm -f /var/www/html/index.html
              systemctl restart apache2
              EOF
  tags = { Name = "SchoolProject-LAMP"}
}

