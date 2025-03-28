<?php include 'inc/header.php' ?>

<?php
// $feedback = [
//   [
//     'id' => '1',
//     'name' => 'Giuseppe Verdi',
//     'email' => 'giuseppeverdi@gmail.com',
//     'body' => 'Sito ben fatto e coinvolgente! Grafica accattivante, navigazione intuitiva e contenuti interessanti che mi hanno tenuto incollato. Ottima esperienza! 🚀.'
//   ],
//   [
//     'id' => '2',
//     'name' => 'Francesco Blue',
//     'email' => 'francescoblue@gmail.com',
//     'body' => 'Prodondo come l\'oceano'
//   ],
// ]

  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

        <h2 class="text-center">Past Feedback</h2>

        <?php if(empty($feedback)): ?>
          <p class="lead mt-3">There is no feedback</p>
        <?php endif; ?>
          
        <?php foreach($feedback as $item): ?>
          <div class="my-3">
            <label for=""><?php echo $item['name'] ?></label>
            <div class="card">
              <div class="card-body">
                <?php echo $item['body'] ?>
                <div>
                  <small class="text-secondary">
                    <?php echo $item['date']; ?>
                  </small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
<?php include 'inc/footer.php' ?>
