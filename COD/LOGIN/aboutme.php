<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Me & Portfolio</title>
<link rel="stylesheet" href="aboutme.css">
<link rel="stylesheet" href="../CSS/maincss.css">
</head>
<body>
<header>
 
 <div class="header">
  
  <div class="header-right">
   
    <a class="hov" href="home.php" data-replace="home"><span>home</span></a>
    <a class="hov" href="aboutme.php" data-replace="about.me"><span>about.me</span></a>


    <a class="hov" href="#" data-replace="find jobs" onclick="openNav()"><span>find jobs</span></a>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="findjobs/WebDesign.php">Web design</a>
        <a href="findjobs/GraphicDesign.php">Graphic design</a>
        <a href="comingsoon.php">Data entry</a>
        <a href="comingsoon.php">Marketing</a>
      </div>
    </div>
  

    <a class="hov" href="#" data-replace="tutorials" onclick="openNav2()"><span>tutorials</span></a>
    <div id="myNav2" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
      <div class="overlay-content">
        <a href="tutorials/tutorial_web.html">Web Design</a>
        <a href="comingsoon.php">Graphic design</a>
        <a href="comingsoon.php">Data entry</a>
        <a href="comingsoon.php">Marketing</a>
      </div>
    </div>
   
      

    <a class="hov" href="http://localhost/COD/LOGIN/index.php" data-replace="log out"><span>log out</span></a>

   
    <a class="hov" href="contact1.php" data-replace="contact"><span>contact</span></a>
    
      </div>
    
    </div>
      
        </header>

        <div class="container">
  <div class="about-me">
    <h2>About Me</h2>
    <button id="edit-about-me" onclick="toggleEdit('about-me')">Edit</button>
    <button id="save-about-me" onclick="toggleEdit('about-me')" style="display:none;">Save</button>
    <div class="about-me-content-wrapper">
      <div class="about-me-photo">
        <input type="file" id="upload-photo" accept="image/*" style="display: none;" onchange="loadFile(event)">
        <label for="upload-photo" class="upload-photo-label">
          <img id="photo-preview" src="default-profile.png" alt="Profile Photo">
        </label>
        <div class="current-status">
          <h3>Current Status</h3>
          <div contenteditable="false" class="about-me-content">Click here to edit your current status.</div>
        </div>
      </div>
      <div class="about-me-sections">
        <div class="about-me-section">
          <h3>Name</h3>
          <div contenteditable="false" class="about-me-content">Click here to edit your name.</div>
        </div>
        <div class="about-me-section">
          <h3>Bio</h3>
          <div contenteditable="false" class="about-me-content">Click here to edit your bio.</div>
        </div>
        <div class="about-me-section">
          <h3>Skills</h3>
          <div contenteditable="false" class="about-me-content">Click here to edit your skills.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="portfolio">
    <h2>Portfolio & Resume</h2>
    <button id="edit-portfolio" onclick="toggleEdit('portfolio')">Edit</button>
    <button id="save-portfolio" onclick="toggleEdit('portfolio')" style="display:none;">Save</button>
    <div class="portfolio-controls">
      <button id="upload-pdf-portfolio" onclick="handlePortfolioUpload()">Add Your Portfolio (PDF)</button>
      <span id="portfolio-file-name"></span>
      <br><br>
      <button id="upload-pdf-resume" onclick="handleResumeUpload()">Add Your Resume (PDF)</button>
      <span id="resume-file-name"></span>
    </div>
    <div class="categories" id="categories">
      <!-- Dynamic categories will be added here -->
    </div>
    <div class="carousel" id="carousel">
      <!-- Example items, dynamically added via JavaScript -->
    </div>
  </div>
</div>
<script>
var categories = ['all']; // Initial category array with 'all'

// Funcție pentru comutarea modului de editare pentru secțiunile "About Me" și "Portfolio"
function toggleEdit(section) {
  var isEditing = document.getElementById('edit-' + section).style.display === 'none';
  var editButton = document.getElementById('edit-' + section);
  var saveButton = document.getElementById('save-' + section);

  if (isEditing) {
    editButton.style.display = 'inline-block';
    saveButton.style.display = 'none';
  } else {
    editButton.style.display = 'none';
    saveButton.style.display = 'inline-block';
  }

  var contentElements = document.querySelectorAll('.' + section + '-content');
  contentElements.forEach(element => {
    element.contentEditable = !isEditing;
    element.style.border = isEditing ? '1px solid #ddd' : '1px solid #007bff';
    element.style.backgroundColor = isEditing ? '#fafafa' : '#e0f7ff';
  });

  if (section === 'portfolio') {
    var addNewItemButton = document.getElementById('add-new-item');
    addNewItemButton.style.display = isEditing ? 'none' : 'inline-block';

    // Afisează butoanele de ștergere în modul de editare
    var deleteButtons = document.querySelectorAll('.delete-btn');
    deleteButtons.forEach(button => {
      button.style.display = isEditing ? 'inline-block' : 'none';
    });
  }
}

// Funcția pentru manipularea încărcării fișierului PDF pentru portofoliu
function handlePortfolioUpload() {
  var fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.accept = '.pdf';
  fileInput.style.display = 'none';
  fileInput.onchange = function(event) {
    var fileNameDisplay = document.getElementById('portfolio-file-name');
    var file = event.target.files[0];
    fileNameDisplay.textContent = 'File uploaded: ' + file.name;
    // Aici poți adăuga logica pentru încărcarea efectivă a fișierului pe server sau altă acțiune dorită
  };
  fileInput.click();
}

// Funcția pentru manipularea încărcării fișierului PDF pentru rezumat (Resume)
function handleResumeUpload() {
  var fileInput = document.createElement('input');
  fileInput.type = 'file';
  fileInput.accept = '.pdf';
  fileInput.style.display = 'none';
  fileInput.onchange = function(event) {
    var fileNameDisplay = document.getElementById('resume-file-name');
    var file = event.target.files[0];
    fileNameDisplay.textContent = 'File uploaded: ' + file.name;
    // Aici poți adăuga logica pentru încărcarea efectivă a fișierului pe server sau altă acțiune dorită
  };
  fileInput.click();
}

// Funcția pentru afișarea doar a categoriilor selectate în portofoliu
function showCategory(category) {
  var items = document.querySelectorAll('.carousel-item');
  items.forEach(item => {
    if (category === 'all' || item.classList.contains(category)) {
      item.style.display = 'block';
    } else {
      item.style.display = 'none';
    }
  });
}

// Funcția pentru adăugarea unui element nou în portofoliu
function addNewItem() {
  var category = prompt('Enter category for the new item:');
  var imageUrl = prompt('Enter image URL for the new item:');

  // Crează un nou buton pentru categorie dacă nu există deja
  if (!categories.includes(category)) {
    categories.push(category);
    updateCategories();
  }

  // Crează un element nou
  var newItem = document.createElement('div');
  newItem.className = 'carousel-item ' + category;
  newItem.style.display = 'block';

  // Crează un element imagine
  var img = document.createElement('img');
  img.src = imageUrl; // Setează URL-ul imaginii
  img.alt = 'Portfolio Image';
  newItem.appendChild(img);

  // Crează butonul de ștergere
  var deleteBtn = document.createElement('button');
  deleteBtn.textContent = 'Delete';
  deleteBtn.className = 'delete-btn';
  deleteBtn.onclick = function() {
    newItem.remove();
  };
  newItem.appendChild(deleteBtn);

  // Adaugă elementul la carusel
  document.getElementById('carousel').appendChild(newItem);
}

// Funcția pentru actualizarea categoriilor în portofoliu
function updateCategories() {
  var categoriesDiv = document.getElementById('categories');
  categoriesDiv.innerHTML = ''; // Curăță categoriile existente

  categories.forEach(cat => {
    var button = document.createElement('button');
    button.textContent = cat.charAt(0).toUpperCase() + cat.slice(1); // Majusculizează prima literă
    button.onclick = function() {
      showCategory(cat);
    };
    categoriesDiv.appendChild(button);
  });
}

// Funcțiile pentru meniul de navigare (overlay)
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  window.onscroll = function() {
    scrollFunction()
  };
}

function openNav2() {
  document.getElementById("myNav2").style.height = "100%";
}

function closeNav2() {
  document.getElementById("myNav2").style.height = "0%";
  window.onscroll = function() {
    scrollFunction()
  };
}
</script>
</body>
</html>
