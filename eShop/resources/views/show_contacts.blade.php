<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Contact</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add custom CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding-top: 50px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        .table {
            margin-bottom: 2rem;
        }

        th {
            background-color: #f2f2f2;
        }

        /* Custom styles for the table */
        .table td {
            vertical-align: middle;
        }

        /* Style for the "Add Contact" button */
        .btn-add-contact {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
        }

        .btn-add-contact:hover {
            background-color: #0056b3;
            color: #fff;
        }

        /* Custom styles for the header */
        .header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-radius: 5px;
        }

        /* Style for the table responsive on smaller screens */
        @media (max-width: 576px) {
            .container {
                padding-left: 10px;
                padding-right: 10px;
            }

            .header {
                font-size: 18px;
            }

            .btn-add-contact {
                display: block;
                width: 100%;
                margin-top: 10px;
            }
        }

        /* Custom style for contact form */
        .contact-form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #fff;
            margin-top: 20px;
        }

        .contact-form label {
            font-weight: bold;
        }

        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .contact-form input[type="text"]:focus,
        .contact-form input[type="email"]:focus,
        .contact-form textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .contact-form textarea {
            resize: vertical;
        }

        .contact-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>CONTACTS</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 table-responsive">
                <table class="table table-bordered mt-3">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Your PHP code here, which remains unchanged -->
                        @foreach ($contacts as $contact)
                            <tr>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center mt-3">
            <a href="#" class="btn btn-add-contact">Trở vê đầu trang</a>
        </div>
    </div>
</body>

</html>
