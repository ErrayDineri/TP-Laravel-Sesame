<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layout')
    @section('content')
        <div class="row" style="margin-top: 5rem;">
            <div class="pull-left">
                <h2>Liste des Etudiants</h2>
            </div>
            <div class="pull-right">
                <a href="#" class="btn btn-success">Create New Student</a>
            </div>
        </div>

        <table class="table table-bordered table-hover">
            <tr>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th width="280px">Action</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Guermazi</td>
                <td>Rayen</td>
                <td>
                    <a href="#" class="btn btn-info">Show</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ismail</td>
                <td>Mhiri</td>
                <td>
                    <a href="#" class="btn btn-info">Show</a>
                    <a href="#" class="btn btn-primary">Edit</a>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        </table>
    @endsection
</body>
</html>