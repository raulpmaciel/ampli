<div class="row">    
    
<?php
while ($donnees = $requete->fetch()) {
?>

    
<div class="col-md-3">

<div class="card">
<div class="card-header"><?php echo htmlspecialchars($donnees['category']); ?></div>

<div class="card-block">
<h4 class="card-title"><?php echo htmlspecialchars($donnees['ideaname']); ?></h4>
<p class="card-text"><?php echo htmlspecialchars($donnees['ideatext']); ?></p>
<a href="index.php?section=like_idea&idea=<?php echo $donnees['id']; ?>" class="btn btn-primary">J'aime</a>
</div>

<div class="card-footer text-muted">
<p>Auteur : <?php echo $donnees['username']; ?></p>
<cite>Likes : <?php echo $donnees['likes']; ?></cite>
</div>

</div>

</div>
 

<?php   
}
$requete->closeCursor();
?>  

                  
</div>