# Team CMS project

This project is working CMS that can be adapted to manage your own website.

### Required tools:
* docker
* docker-compose

### How to run the project:

In order to run this project you have to follow the steps:
* download from github `git clone git@github.com:jhryniuk/team_project.git`
* go to `team_project`
* run command `docker-compose build && docker-compose up`
* add `127.0.0.1 team-project.dev www.team-project.dev` to your `/etc/hosts` file

You should see running project in the browser by using url `team-project.dev`

### How to stop the project
* Go to `team_project`
* run command `docker-compose down`