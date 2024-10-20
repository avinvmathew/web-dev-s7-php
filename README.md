# Task Manager Application

This is a simple PHP-based Task Manager web application that allows users to create, view, and delete tasks from a to-do list. The tasks are stored using PHP sessions, meaning the data persists as long as the session is active.

## Features

- **Add Tasks**: Users can add new tasks to their to-do list.
- **Delete Tasks**: Users can delete tasks from the list.
- **Session Persistence**: Tasks are stored in the session and persist until the session ends.

## Technologies Used

- **PHP**: Backend scripting language to handle form submission and session management.
- **HTML**: Structuring the web page.
- **CSS**: Styling the web page for a clean, modern appearance.

## How to Run

1. **Download or Clone the Repository**:
    ```bash
    git clone https://github.com/avinvmathew/web-dev-s7-php.git
    ```

2. **Start a Local PHP Server**:
    You can use PHP's built-in server to run the application locally. In the project directory, run the following command:
    ```bash
    php -S localhost:8000
    ```

3. **Open in Browser**:
    Once the server is running, open your browser and navigate to:
    ```
    http://localhost:8000
    ```

4. **Use the Application**:
    - Enter a task in the input field and click the "Add" button to add it to your to-do list.
    - Click the "Delete" link next to a task to remove it from the list.

## Project Structure

```bash
.
├── index.php     # Main PHP file that handles session, form submission, and rendering tasks
└── README.md     # Project documentation
