# 📚 Readure Website

> An online reading platform built with **PHP + MySQL + Apache**, featuring user login, book display, and news modules.  
> 独立开发的在线阅读网站，基于 PHP + MySQL，支持用户系统、书籍展示与资讯内容。

---

## 🧰 Tech Stack
- **Frontend:** HTML5, CSS3, JavaScript  
- **Backend:** PHP (WAMP Environment)  
- **Database:** MySQL (via phpMyAdmin) 
- **Server:** Apache (WAMP Server)  
- **Security:** Session management + MD5 encryption  

---

## ⚙️ Setup
1. Run WAMP and place `Readure Library` in the `www` folder.  
2. Import `readure.sql` in **phpMyAdmin**.  
3. Open in browser: http://localhost/readure-website/Readure/index.php


---

## 🗂 Structure
```
readure-website/
│
│ readure.sql # Database file
│
├─ Readure/ # Main source code
│ ├─ config.php # DB connection
│ ├─ index.php # Homepage
│ ├─ content.php # News detail
│ ├─ xiangqing0.php # Book detail
│ ├─ loginVerify.php # Login check
│ ├─ doLogout.php # Logout
│ │
│ ├─ files/ # Static text ("About Us")
│ ├─ images/ # Banners, covers, logos
│ ├─ loginRD/ # Login module
│ └─ zhuceRD/ # Register module
│
└─ Website Screenshots/ # Preview images
1-1.png ~ 5-1.png
```

---

## 🖼 Preview
Key pages include homepage, book list, news detail, login & registration.  
All screenshots are in `/Website Screenshots/`.

---

## 👩‍💻 Author
**ShiHui TANG**   
📍 Shenzhen, China  
📅 2025.06 



> Clean. Functional. Fully self-designed.
