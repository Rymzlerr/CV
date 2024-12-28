<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title class="section">CV SOLANE Mathieu</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="resume">
   <div class="resume_left">
     <div class="resume_profile">
       <img src="AvatarMathieu.png" alt="Photo de profil">
     </div>
     <div class="resume_content">
       <div class="resume_item resume_info">
         <div class="title">
           <p class="bold">Solane Mathieu</p>
           <p class="regular">Etudiant</p>
         </div>
         <ul>
           <li>
             <div class="icon">
               <i class="fas fa-map-signs"></i>
             </div>
             <div class="data">
               Haux <br /> France
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-mobile-alt"></i>
             </div>
             <div class="data">
               07 85 50 52 20
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fas fa-envelope"></i>
             </div>
             <div class="data">
              	solane.m.p
				        @gmail.com
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               www.MaNoteAuBac.com
             </div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_skills">
         <div class="title">
           <p class="bold">Compétence</p>
         </div>
         <ul>
           <li>
             <div class="comp_name">
               HTML
             </div>
             <div class="comp_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="comp_per">80%</div>
           </li>
           <li>
             <div class="comp_name">
               CSS
             </div>
             <div class="comp_progress">
               <span style="width: 40%;"></span>
             </div>
             <div class="comp_per">40%</div>
           </li>
           <li>
             <div class="comp_name">
               PYTHON
             </div>
             <div class="comp_progress">
               <span style="width: 90%;"></span>
             </div>
             <div class="comp_per">90%</div>
           </li>
           <li>
             <div class="comp_name">
               JS
             </div>
             <div class="comp_progress">
               <span style="width: 60%;"></span>
             </div>
             <div class="comp_per">60%</div>
           </li>
         </ul>
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         <ul>
		   <li>
            <div class="icon">
               <i class="fab fa-instagram"></i>
            </div>
            <div class="data">
               <p class="semi-bold">Instagram</p>
               <p>mathieu._.sln</p>
            </div>
           </li>
         </ul>
       </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title">
           <p class="bold">Présentation</p>
         </div>
        <p>Je suis apprenti developpeur depuis 2 ans</p>
    </div>
    <div class="resume_item resume_work">
        <div class="title">
           <p class="bold">Experience de travail</p>
         </div>
        <ul>
            <li>
                <div class="date">2020</div> 
                <div class="info">
                     <p class="semi-bold">Stage</p> 
                  <p>J'ai effectué un stage chez un oenologie c'est à dire celui qui va étudier le vin</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_education">
      <div class="title">
           <p class="bold">Education</p>
         </div>
      <ul>
            <li>
                <div class="date">2021 - 2023</div> 
                <div class="info">
                     <p class="semi-bold">Lycée Sainte Marie Bastide</p> 
                  <p>Diplôme en cours : Bac</p>
                </div>
            </li>
            <li>
              <div class="date">2016 - 2021</div>
              <div class="info">
                     <p class="semi-bold">Collège Lestonnac</p> 
                  <p>Diplôme obtenue : ASSR2, Brevet mention très bien et certification Pix</p>
                </div>
            </li>
        </ul>
    </div>
    <div class="resume_item resume_hobby">
      <div class="title">
           <p class="bold">Intérêt</p>
         </div>
       <ul>
         <li><i class="fas fa-map-signs"></i></li>
         <li><i class="fas fa-gamepad"></i></li>
         <li><i class="fas fa-music"></i></li>
         <li><i class="fab fa-pagelines"></i></li>
      </ul>
    </div>
    <div class="resume_item resume_contact">
    <div class="title">
        <p class="bold">Formulaire de Contact</p>
    </div>
    <form action="contact.php" method="post">
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Votre e-mail" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input id="message" name="message" rows="5" placeholder="Votre message" required></input>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Envoyer</button>
        </div>
    </form>
    </div>
  </div>
</div>