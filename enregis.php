       
    <?php

if(isset($_POST['envoyer']))
{
  $nom = $_POST[ 'nom'];
  $prenom = $_POST[ 'prenom' ];
  $age = $_POST[ 'age' ];

  $sql = "INSERT INTO liste (Nom, Prénom, âge) VALUES (:nom, :prenom, :age)";
  $stmt = $conn->prepare($sql);
   
  $stmt->bindParam(':nom', $nom);
  $stmt->bindParam(':prenom', $prenom);
  $stmt->bindParam(':age', $age);
  $stmt->execute();
}
?>