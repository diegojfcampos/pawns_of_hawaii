<div class="form-sections">
  <form action="../controller/index_feature_update.php" method="post">
    <h1 class="formsTitle"> Change the feature above</h1>
    <label for="title">Title: </label><br>
    <input type="text"  placeholder="Chose the Feature's Title" id="title" name="title"  ><br>
    <label for="content" >Content: </label><br>
    <textarea id="content"  placeholder="Chose the Feature's Content"name="content" ></textarea><br>
    <div class="btnForm">
      <input class="btnForm" type="submit" value="Save">
      <button class="link" onclick="setDefaultValues()" style="margin-left: 10px;" >Default</button>
    </div>
  </form>
</div>

/
<?php
//Setting default text


function setDefaultValues() {
  
  $title = $_POST['title'];
  $content = $_POST['content'];

  // Atribui os valores padrão aos campos
  $title = "Why adopt a Cat?";
  $content = "<<<EOT
  <p>Adopting a pet is a wonderful way to bring joy and companionship into your life. It's also an act of kindness that helps to save a life and make a positive impact on the community.</p><br>
  <p>When you adopt a pet, you are giving a second chance to an animal that may have been abandoned, neglected, or surrendered by their previous owner. By providing a loving home and the necessary care, you are giving them the opportunity to live a happy and fulfilling life.</p><br>
  <p>In addition to the personal rewards of adopting a pet, there are also several social and environmental benefits. Adopting a pet can help to reduce the number of animals that end up in shelters and prevent overpopulation. It can also help to reduce the number of stray animals on the streets, which can have a positive impact on the community.</p><br>
  EOT;";
}
