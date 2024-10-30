<?php

include($_SERVER["DOCUMENT_ROOT"]."/_blocks/doctypeAdmin.php");

?>

</head>

<body> 
    
    <?php

        include($_SERVER["DOCUMENT_ROOT"]."/_blocks/headerAdmin.php")

    ?>

</header>

    <main class="main-admin">
        <div>
            <h1>Liste des utilisateurs</h1>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Email</th>
                            <th>Téléphone</th>
                            <th>Rôle</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($listeUtilisateur as $utilisateur): ?>
                        <tr>
                            <th><?php echo $utilisateur->id;?></th>
                            <td><?php echo $utilisateur->nom_utilisateur;?></td>
                            <td><?php echo $utilisateur->prenom_utilisateur;?></td>
                            <td><?php echo $utilisateur->email_utilisateur;?></td>
                            <td><?php echo $utilisateur->telephone_utilisateur;?></td>
                            <td><?php echo $utilisateur->nom_role;?></td>
                        </tr>
                    <?php endforeach; ?>    
                    </tbody>

                </table>
            </div>
        </div>
    </main>
</body>
</html>