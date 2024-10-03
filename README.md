# Quality Education Quiz Web Application
<p>This project was prepared within the Argenova Technology 2022 Summer Internship Program.<p> 
This project encompasses a quiz web application developed to promote quality education aligned with the Sustainable Development Goals. Users can test their knowledge on various subjects by answering questions. The project is built using Laravel, Bootstrap, and MySQL technologies.

## Project Overview

This project is designed to manage quizzes, providing functionalities for two types of users: administrators and regular users.

### User Roles and Features

#### Administrator Features:

- Create Quizzes: Administrators can create new quizzes. Each quiz can be set to be active either indefinitely or until a specific end date.
- Manage Questions: Administrators can add questions to existing quizzes or edit them as needed.
- View Quiz Statistics: Administrators have access to comprehensive statistics for each quiz, including details such as:
Who participated in the quiz.
- Number of correct and incorrect answers given by users.
- Date and time when each user completed the quiz.
- A leaderboard showing top performers and user rankings.
#### Regular User Features:

- Take Quizzes: Regular users can participate in quizzes and answer questions.
- Analyze Results: After completing a quiz, users can view detailed analytics of their performance, including correct and incorrect answers.
- Review Completed Quizzes: Users have the ability to save and review quizzes they have completed, making it easier to revisit questions and improve.
- View Quiz Statistics: Users can access the statistical overview of quizzes they’ve taken, allowing them to track their progress and see where improvements can be made.

## Features

- Users can answer questions on different topics.
- Correct and incorrect answers can be designated for each question.
- User's correct answers and scores are recorded.
- Contains questions focusing on Sustainable Development Goals.

## Technologies Used

- Laravel: Used as the web application framework.
- Bootstrap: Utilized for designing the user interface.
- MySQL: Employed for database management.

## Requirements

- PHP 7.3 and above
- Composer
- MySQL Database

## Installation

1. Clone this repository: `git clone https://github.com/YOUR_USERNAME/PROJECT_REPO.git`
2. Navigate to the project folder: `cd PROJECT_REPO`
3. Install the required dependencies: `composer install`
4. Copy the `.env.example` file as `.env` and configure your database settings.
5. Create the database: `php artisan migrate`
6. Start the application: `php artisan serve`

## Usage

1. Users can create an account as a student or an instructor.
2. Students can take quizzes on various subjects.
3. Instructors can create new quizzes and questions.

## Contributing

1. Fork this repository.
2. Create a new feature branch: `git checkout -b new-feature`
3. Commit your changes: `git commit -am 'Added new feature: DESCRIPTION'`
4. Push to your branch: `git push origin new-feature`
5. Create a Pull Request.


## License

This project is licensed under the MIT License. For more information, refer to the [LICENSE](LICENSE.md) file.

---

This README template provides basic information to introduce and share your project. Remember to add project-specific details and make changes as needed.
