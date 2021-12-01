# **Setup**

## **Clone The Repository**

First you would want to clone this repository. You can do this using the following commands.

### **HTTPS**

```bash
git clone https://github.com/JSchoonveld/Kubernetes.git
```

### **SSH**

```bash
git clone git@github.com:JSchoonveld/Kubernetes.git
```

### **GitHub CLI**

```bash
gh repo clone JSchoonveld/Kubernetes
```

---

## **Create `.env` File**

After you have cloned the repository you need to create an `.env` file in the root folder of the application. You can find an example file in the root folder as well, `.env.example`. You can use this file to set up your own.

---

## **Set Up Laravel Sail**

Now that the `.env` file is in place we can set up Laravel Sail in our existing Laravel environment. We will begin with installing all of the needed dependencies using the following command:

```php
composer require laravel/sail --dev
```

After Sail has been installed, you may run the `sail:install` Artisan command. This command will publish Sail's `docker-compose.yml` file to the root of your application:

```php
php artisan sail:install
```

> ## **NOTE:**
>
> If you get asked to select the database you want to use, you have to select the MySQL option.

After that you can start up the application:

```php
./vendor/bin/sail up
```

## **Configuring A Bash Alias**

Instead of repeatedly typing `vendor/bin/sail` to execute Sail commands, you may wish to configure a Bash alias that allows you to execute Sail's commands more easily:

```bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
```

Once the Bash alias has been configured, you may execute Sail commands by simply typing `sail`. The remainder of this documentation's examples will assume that you have configured this alias:

```bash
sail up
```
