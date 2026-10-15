output "web_server_ip" {
  description = "Public IP address of the LAMP web server"
  value       = aws_instance.lamp_server.public_ip
}

