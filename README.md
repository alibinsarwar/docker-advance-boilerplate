# Docker Advance Boilerplate

<p align="center"><img src="/art/logo.png" alt="Docker Advance Boilerplate"></p>

<div align="center">

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/alibinsarwar/docker-advance-boilerplate)](https://github.com/alibinsarwar/docker-advance-boilerplate/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/alibinsarwar/docker-advance-boilerplate)](https://github.com/alibinsarwar/docker-advance-boilerplate/pulls)

</div>

The Docker Advance Boilerplate package simplifies running your Laravel project on Docker by providing a Docker YAML file with predefined scripts and image details. This package eliminates the need to create a Laravel project within a Docker environment, saving you time during project setup.

## Purpose

The purpose of the Docker Advance Boilerplate package is to simplify running your Laravel project on Docker. Whether you are starting a new project or have an existing Laravel project, this package provides a streamlined approach to running your project on Docker.

For new projects: Instead of using the Laravel curl command to create a project within a Docker environment, you can now create a Laravel project without Docker and install this package to enable Docker support.

For existing projects: If you already have a Laravel project and want to run it on Docker, this package provides the necessary Docker YAML file and scripts to facilitate the Dockerization process.

The Docker Advance Boilerplate package aims to save you time and effort by providing a standardized approach to running Laravel projects on Docker, regardless of whether they are new or existing projects.

## Prerequisites

Before using this package, ensure that you have the following:

- Docker installed on your system.
- PHP version greater than equal to 8.2.
- Laravel/Sail package, which is typically included by default in Laravel projects. If it's not present, you must install it first.

## Installation

To install the Docker Advance Boilerplate package, run the following command in your Laravel project's root directory:

```shell
composer require alibinsarwar/docker-advance-boilerplate:dev-main

```
After the package is installed, you can run your Laravel project on Docker using either of the following commands:

```shell
./vendor/bin/sail up

```

```shell
docker-compose up

```
## Contributing
Contributions are welcome! If you encounter any issues or have suggestions for improvements, please open an issue or submit a pull request on the [GitHub repository](https://github.com/alibinsarwar/docker-advance-boilerplate).
