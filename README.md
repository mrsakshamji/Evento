
# 🎉 Evento – Event Registration Website

**Evento** is a modern, user-friendly event registration platform built using **HTML**, **CSS (Tailwind)**, **JavaScript**, **PHP**, and **MySQL**. It allows users to register for events like **QuizVerse**, **Hackathon**, and **CodeClash**, and handles user data collection and payment processing.

## 🌐 Live Preview


https://eventos.kesug.com/

---

## 📌 Features

- 🎯 Multiple Event Registration (QuizVerse, Hackathon, CodeClash)
- 📝 Detailed User Form with Validation
- 📱 Responsive UI (Tailwind CSS)
- 💳 Razorpay Test Payment Integration
- 📦 Backend Processing with PHP & MySQL
- 📊 Animated Metrics Counter
- 📬 Contact Section for User Feedback

---

## 🛠️ Tech Stack

| Frontend      | Backend       | Database |
|---------------|---------------|----------|
| HTML, Tailwind CSS, JS | PHP           | MySQL    |

---

## 🚀 Getting Started

### Prerequisites

- PHP (>= 7.x)
- MySQL
- Local server (XAMPP, WAMP, or MAMP)

### Installation

1. **Clone or Download the Repository**

2. **Move to your local server directory**
   ```bash
   cd /xampp/htdocs/evento
   ```

3. **Import the database**
   - Create a database in phpMyAdmin (e.g., `evento`)
   - Import your `.sql` file (not provided here, make sure to export it from your project)

4. **Configure the database connection**
   - Edit `db.php` with your database credentials.

5. **Run the project**
   - Visit `http://localhost/evento/index.html`

---

## 📂 Project Structure

```
evento/
│
├── index.html             # Landing page
├── form.html              # Registration form UI
├── form.php               # Form handler (PHP)
├── payment.php            # Payment gateway page
├── payment_success_page.php # Success redirect
├── db.php                 # Database connection
├── Images/                # All image assets
```

---

## 💳 Razorpay Integration

The payment gateway is integrated using Razorpay in **test mode**. After submitting the form, users can proceed to make a test payment through the Razorpay checkout.

---

## 📧 Contact

If you have any feedback, questions, or suggestions, feel free to reach out through the **Contact Us** section on the website.

---

## 📄 License

This project is open-source and available for educational or personal use. Attribution is appreciated.
