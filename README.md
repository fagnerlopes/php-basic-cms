# Docker LAMP

Simple and basic LAMP Docker environment.

## Start container

1. Create a new directory named "repo"

```bash
~ $ mkdir repo && cd repo
```

2. Clone this repository:

```bash
~/repo $ git clone https://github.com/fagnerlopes/docker-lamp
```

3. Enter into directory running the following command:

```bash
~/repo $ cd docker-lamp
```

4. Copy .env.example to .env file:

```bash
~/repo $ cp .env.example .env
```

5. Start the container with the following command:

```bash
~/repo/docker-lamp $ sudo docker-compose up -d
```

6. Access the project in http://localhost:APP_PORT

7. Put the PHP project files in the src folder:
   - /repo <br>
     -- /docker-lamp <br>
     --- /.docker (config files) <br>
     --- /src (project files) <br>

## Stop container

To stop the container run the following command:

```bash
$ sudo docker-compose stop
```
