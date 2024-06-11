<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Search and find software houses in Pakistan easily. Get detailed information about software houses including location, contact details, and more.">
    <meta name="keywords" content="Software Houses, Pakistan, Karachi, Lahore, Islamabad, Shahrah-e-Faisal, Nazimabad, D.H.A, software companies, tech companies, IT firms">
    <meta name="author" content="Your Name">
    <title>Software Houses In Pakistan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #0F172A;
            color: #ecf0f1;
            font-family: 'Poppins', sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .text-center h1 {
            font-size: 3.75rem;
            font-weight: 600;
            color: white;
        }
        .form-control {
            background-color: #10182B;
            color: #ecf0f1;
            border: 1px solid #1abc9c;
        }
        .form-control:focus {
            background-color: #1c2431;
            color: #ecf0f1;
            border-color: #1abc9c;
        }
        .card {
            background-color: #10182B;
            color: #ecf0f1;
            border-radius: 10px;
        }
        .table th, .table td {
            color: #ecf0f1;
            border-color: #162131;
            vertical-align: middle;
        }
        .table th {
            background-color: #162131;
        }
        .table tbody tr:hover {
            background-color: #3b5363;
        }
        .table td a {
            color: #1abc9c;
            text-decoration: none;
        }
        .table td a:hover {
            text-decoration: underline;
        }
        .btn-link {
            color: #ecf0f1;
        }
        .btn-link:hover {
            color: #1abc9c;
            text-decoration: underline;
        }
        .scroll-wrapper {
            overflow-x: auto;
            overflow-y: hidden;
        }
        .scroll-wrapper::-webkit-scrollbar {
            height: 8px;
        }
        .scroll-wrapper::-webkit-scrollbar-track {
            background: #0F172A;
        }
        .scroll-wrapper::-webkit-scrollbar-thumb {
            background: #1abc9c;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Software Houses In Pakistan</h1>
        <p>The dataset is from 2020, so some links may no longer be active. You can cross-check the software houses by searching them on Google. This small project aims to provide an easy way to search for software houses near you in Pakistan. You can utilize the search functionality by entering city names like Karachi, Lahore, or Islamabad, or by searching specific areas such as Shahrah-e-Faisal, Nazimabad, or D.H.A.</p>
        <div class="mb-4">
            <input type="text" id="search" class="form-control" placeholder="Search...">
        </div>
        <div class="table-container">
            <div class="scroll-wrapper">
                <table class="table table-bordered table-striped table-responsive" id="software-houses-table">
                    <thead>
                        <tr>
                            <th>SNO</th>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Website</th>
                            <th>Person</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchData() {
                $.ajax({
                    url: '/api/software-houses',
                    method: 'GET',
                    success: function(data) {
                        var tbody = $('#software-houses-table tbody');
                        tbody.empty();
                        $.each(data, function(index, softwareHouse) {
                            var summary = softwareHouse.summary || '';
                            tbody.append(`
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${softwareHouse.name}</td>
                                    <td>${softwareHouse.location}</td>
                                    <td>${softwareHouse.phone}</td>
                                    <td>${softwareHouse.email}</td>
                                    <td><a href="${softwareHouse.website}" target="_blank">${softwareHouse.website}</a></td>
                                    <td>${softwareHouse.person}</td>
                                    <td>${softwareHouse.designation}</td>
                                </tr>
                            `);
                        });
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching data:', error);
                    }
                });
            }

            fetchData();

            $('#search').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                $('#software-houses-table tbody tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
                });
            });
        });

        function toggleSummary(element, fullSummary) {
            var summaryElement = $(element).siblings('.summary');
            if (summaryElement.text().endsWith('...')) {
                summaryElement.text(fullSummary);
                $(element).text('Hide Summary');
            } else {
                summaryElement.text(fullSummary.substring(0, 50) + '...');
                $(element).text('Read Summary');
            }
        }
    </script>
</body>
</html>
