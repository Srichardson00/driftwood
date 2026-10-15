output "web_server_ip" {
  description = "Public IP address of the LAMP web server"
  value       = aws_instance.lamp_server.public_ip
}

output "private_key_pem" {
	description = "Private SSH key for connecting to EC2 instance"
	value       = tls_private_key.lamp_key.private_key_pem
	sensitive   = true
}