# driftwood
Automated PHP Web Application Deployment on AWS LAMP Stack
A complete end-to-end DevOps project showcasing Infrastructure as Code (IaC) with Terraform and continuous deployment via GitHub Actions to host a PHP web application on an AWS EC2 LAMP stack.

🛠️ Tech Stack & Architecture
Infrastructure as Code: Terraform

Cloud Provider: Amazon Web Services (AWS EC2, VPC, Security Groups)

Web Stack (LAMP): Apache2, PHP, Linux (Ubuntu 24.04 LTS)

CI/CD Pipeline: GitHub Actions (appleboy/scp-action)

Version Control: Git & GitHub

🚀 Key Features & Implementation Details
Declarative Infrastructure Provisioning:

Managed AWS VPC, Internet Gateway, Subnet, and Security Group ingress/egress rules using modular Terraform configuration.

Utilized dynamic Ubuntu 24.04 AMI lookup to avoid hardcoded AMI IDs across AWS regions.

Automated CI/CD Pipeline:

Configured GitHub Actions to automatically trigger deployments on every push to the main branch.

Secured SSH credentials using GitHub Encrypted Secrets (EC2_SSH_KEY and EC2_HOST).

Automated secure SCP file sync directly into the server's web root (/var/www/html).

Web Server Hardening & Permissions:

Enforced directory ownership (ubuntu:ubuntu) on the Apache web root to allow non-root automated deployments via SCP.