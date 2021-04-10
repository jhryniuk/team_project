# Team CMS project

This project is working CMS that can be adapted to manage your own website.

### Required tools:
* virtual box
* vagrant

### How to run the project:

In order to run this project you have to follow the steps:
* download from github `git clone git@github.com:jhryniuk/team_project.git`
* go to `team_project/vagrant`
* run command `vagrant up`
* add `10.0.0.200 team-project.dev www.team-project.dev` to your `/etc/hosts` file

You should see running project in the browser by using url `team-project.dev`

### How to stop the project
* Go to `team_project/vagrant`
* run command `vagrant halt`