# CodingLinguist

CodingLLinguist is a web-based interactive programming language learning application with a gamification system, built using the **Laravel Framework**. This platform aims to provide a structured and engaging learning experience for beginners interested in programming. 👨‍💻💡

---

## Features

* **Interactive Learning:** Learn programming languages like **C, Java, and Python** through structured materials and hands-on exercises.
* **Gamification System:** Earn points and badges by completing quizzes and challenges, and see your progress on the leaderboard. 🏆
* **Community Forum:** Engage with other learners, ask questions, and share your knowledge in our community forum. 🤝
* **In-browser IDE:** Write and execute code directly in your browser without any additional setup.
* **User Profiles:** Track your progress, view your earned badges, and manage your account settings.

---

## Technologies Used

* **Backend:** PHP, Laravel
* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Database:** MySQL

---

## Getting Started

### Prerequisites

* PHP
* Composer
* Node.js
* NPM
* MySQL

### Installation

1.  Clone the repository:
    ```bash
    git clone [https://github.com/wiriim/codinglinguist.git](https://github.com/wiriim/codinglinguist.git)
    ```
2.  Install PHP dependencies:
    ```bash
    composer install
    ```
3.  Install NPM dependencies:
    ```bash
    npm install
    ```
4.  Create a copy of your `.env.example` file and name it `.env`.
5.  Generate an app encryption key:
    ```bash
    php artisan key:generate
    ```
6.  Run the database migrations:
    ```bash
    php artisan migrate
    ```
7.  Seed the database:
    ```bash
    php artisan db:seed
    ```

### Running the Application

1.  Start the development server:
    ```bash
    php artisan serve
    ```

---

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
