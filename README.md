# PakSoftwareHouses

**PakSoftwareHouses** is a web application designed to provide an easy and efficient way to search for software houses in Pakistan. The dataset, which dates back to 2020, includes information such as location, contact details, and key personnel. Users can filter results by city (e.g., Karachi, Lahore, Islamabad) or by specific areas (e.g., Shahrah-e-Faisal, Nazimabad, D.H.A).

## Features
- Search software houses by city or area.
- Responsive table view with a modern dark-themed design.
- Direct links to websites and contact emails.
- User-friendly interface with a search filter for quick access to relevant information.

## Tech Stack
- Laravel for the backend.
- jQuery and Bootstrap for the frontend.
- AJAX for seamless data fetching.

## How to Use
1. Clone the repository:
    ```sh
    git clone https://github.com/umair-log/pak-software-houses.git
    ```
2. Navigate to the project directory:
    ```sh
    cd pak-software-houses
    ```
3. Install dependencies:
    ```sh
    composer install
    ```
4. Set up your `.env` file and run migrations:
    ```sh
    php artisan migrate
    ```
5. Start the development server:
    ```sh
    php artisan serve
    ```
6. Access the application at `http://127.0.0.1:8000/`

## Contributions
Contributions are welcome! Please fork the repository and submit a pull request with your changes. Ensure your code follows best practices and is well-documented.

## License
This project is licensed under the MIT License.
