
variable "aws_region" {
	type = string
	description = "Setting AWS region"
	default = "us-west-2"
}

variable "instance-type" {
	type = string
	description = "EC2 instance"
	default = "t3.micro"
}

