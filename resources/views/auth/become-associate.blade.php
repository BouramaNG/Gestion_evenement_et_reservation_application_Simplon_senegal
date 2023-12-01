<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
          
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            width: 30%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ced4da;
            border-radius: 4px;
            margin-top: 5px;
        }

        button {
            background-color: #007bff;
            color: #ffffff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form action="{{ route('association.register') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="text" id="name" required name="name" placeholder="Nom de votre boutique" />
    </div>
    <div class="form-group">
        <label for="username">Nom d'utilisateur</label>
        <input type="text" id="username" required name="username" placeholder="Nom d'utilisateur" />
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" required name="email" placeholder="Email" />
    </div>
    <div class="form-group">
        <label for="phone">Telephone</label>
        <input type="text" id="phone" required name="phone" placeholder="Telephone" />
    </div>
    <div class="form-group">
        <label for="date_inscripton_association">Date Creation</label>
        <select name="date_inscripton_association" class="form-select mb-3" aria-label="Default select example">
            <option selected="">Date que vous avez rejoins</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
        </select>
    </div>
    <div class="form-group">
        <label for="slogan">Slogan</label>
        <input type="text" id="slogan" required name="slogan" placeholder="Slogan de votre association" />
    </div>
    <div class="form-group">
        <label for="logo">Logo</label>
        <input type="file" id="logo" name="logo" accept="image/*" />
    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input required="" id="password" type="password" name="password" placeholder="Mot de passe" />
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirmation mot de passe</label>
        <input required="" id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirmation mot de passe" />
    </div>
    <button type="submit">Inscription</button>
</form>

</body>
</html>
