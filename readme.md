# Unlimited Image Grabber
Helps you to grab all kinds of images exception 18+ adult content.



## About

Open-source projects like Unlimited Image Grabber provide benefits such as modularity, knowledge sharing, and versatility. They offer a valuable resource for developers, organizations, and individuals looking to build and innovate in the digital space, while promoting inclusivity, transparency, and collaboration within the development community.

## DEMO

`Image Grabber:`

![Alt Text](demos/img_grabber.gif)



## Installation

You just need to clone this repo like:

```groovy
git clone https://github.com/JoshimOfficial/Unlimited_Image_Grabber.git
```


## Usage (Most important)

First of all create a DB named `uig` then create a table named `webfixer` with id, url, created_date, and created_time column.
set as  

- id = int (primary);
- domain = varchar (255)

And now manually insert a data url to that `webfixer` as your current `localhost` project `location` like:

- if you run the project from this location:
http://localhost/downloader/FIPY_downloader/


- then you should insert data to `webfixer` in `url` as:
http://localhost/downloader/FIPY_downloader



- Note: Never put the slashes `/` to the end like: 

http://localhost/tailwind/10/test/FIPY_downloader/

This is wrong way.



- You should put the url like:

http://localhost/tailwind/10/test/FIPY_downloader

Note: Do not set any password. To see more about database go to the `conn.php` file for comfiguration.
You can change `conn.php` and `setDomain.php` file for custom database.
Now run you project index.php file to your localhost. 


## Feature

- You can grab unlimited image


## Limitation

There are some limitation

- Sometimes some of images cannot be displayed.


## Most Important Note:
- This project isn't  more secure to use as a website.
- This is an `Open Source` project and can be use practice purpose only.
- If you upload it to your hosting server then you will take all type of risk.



## About me on this project:

```
Only I designed the font-end and also made the back-end.
Building the logic, breaking the rules, scraping from web, taking help from google, 
stackoverflow, chatGPT etc
for just updating my this project. 

Thank you 💜

```