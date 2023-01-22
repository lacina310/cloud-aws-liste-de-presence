<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénoms</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($participants as $participant)
                    <tr>
                        <th scope="row">{{ $participant->id }}</th>
                        <td>{{ $participant->nom }}</td>
                        <td>{{ $participant->prenoms }}</td>
                        <td>{{ $participant->tel }}</td>
                        <td>{{ $participant->email }}</td>
                    </tr> 
                    @empty
                        <tr>
                            <td colspan="5" style="text-align: center; color:red;">Aucun participant</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
