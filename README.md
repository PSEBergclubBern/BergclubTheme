# BergclubTheme

This theme is part of a project in PSE with the goal, that the current website will be renewed.

## HowTo Code

This project has an Vagrant configuration File in the root. The general procedure is:

1. Install Vagrant (https://www.vagrantup.com/) and VirtualBox (https://www.virtualbox.org/)
2. Install the vagrant plugin (`vagrant plugin install vagrant-hostsupdater`) for automatically adding host entries (only Linux / Mac).
3. Clone this repository in a directory
4. Navigate to that directory in a terminal and run the command `vagrant up`

Now a virtual machine is created and provisioned. If for some reason the configuration failes, you can retry the provisioning with `vagrant provision`. If for some reason this also fails, try to destroy the local environment with `vagrant destroy` and do a `vagrant up` afterwards.

If you are finished with your work, you can commit your changes (bear in mind our git workflow) and halt the virtual machine with `vagrant halt`.

## General information about theme
The theme resides in wordpress/wp-content/themes/bergclub-theme

## Wordpress installation
1. The wordpress site is accessible through IP (192.168.33.11) or through the URL vccm-theme.dev 
2. The username / password for the wp site is 'admin'/'admin'

## Important information for Windows user
Vagrant can't change the hosts file on Windows. To ensure that the environment works, you have to add following lines to the hosts file (it's in the path C:\Windows\system32\drivers\etc)

`192.168.33.11  vccm-theme.local`
