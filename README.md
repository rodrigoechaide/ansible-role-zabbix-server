# Ansible Playbook: Deploy Zabbix Server

An Ansible playbook for Deploy Zabbix Server in Ubuntu 16.04 (installation from repositories) and in Raspberry Pi (compilation from sources). 

## Requirements

This playbook requires Ansible 2.0 or higher.

Tested on Ubuntu 16.04 and 18.04. Should work on all Ubuntu versions >= 16.04.

## Playbook Variables

Modify the file hosts.ini file, in order to select the hosts to deploy, the variables inside each role and the global variables inside group_vars/zabbix_servers.yml. To change database engine modify the variable "DB_ENGINE" inside database role.

Database Engines Available:
* Postgresql
* Mysql

## Dependencies

No dependencies are necessary to install.

## Example usage

``` shell
ansible-playbook zabbix-server-deploy.yml -i hosts -k -K
```