<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        input {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 15px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .delete-button {
            background-color: #e74c3c;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
        }
        .delete-button:hover {
            background-color: #c0392b;
        }

        #itemTable {
        width: 100%;
        border-collapse: collapse;
        background-color: #f9f9f9; /* خلفية الجدول */
    }
    #itemTable th, #itemTable td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }
    #itemTable th {
        background-color: #4CAF50; /* لون خلفية رأس الجدول */
        color: white;
    }
    .view-button {
        background-color: #007bff; /* لون زر الرابط */
        color: white;
        border: none;
        padding: 8px 12px;
        text-decoration: none;
        cursor: pointer;
        border-radius: 4px;
    }
    .view-button:hover {
        background-color: #0056b3; /* لون الزر عند التمرير */
    }
    </style>
</head>
@livewireStyles
<body>
    @livewire('save-url')
    @livewireScripts
</body>
</html>
