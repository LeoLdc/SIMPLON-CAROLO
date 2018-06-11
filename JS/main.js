var simplon = document.getElementById('simpl');
var historique = document.getElementById("hist");
var promo = document.getElementById("prom");
var pédagogie = document.getElementById("peda");
var partenaires = document.getElementById("part");
var divsimpl = document.getElementById("divsimpl");
var divhist = document.getElementById("divhist");
var divprom = document.getElementById("divprom");
var divpeda = document.getElementById("divpeda");
var divpart = document.getElementById("divpart");

simpl.addEventListener('click', revsimpl);
hist.addEventListener('click', revhist);
prom.addEventListener('click', revprom);
peda.addEventListener('click', revpeda);
part.addEventListener('click', revpart);


function revsimpl() {
    if (divsimpl.style.display == 'none') {;
        divsimpl.style.display = 'block';
		divhist.style.display = 'none';
		divprom.style.display = 'none';
		divpeda.style.display = 'none';
    divpart.style.display = 'none';
  } else { divsimpl.style.display = 'none'; }
};

function revhist() {
    if (divhist.style.display == 'none') {;
      divsimpl.style.display = 'none';
  divhist.style.display = 'block';
  divprom.style.display = 'none';
  divpeda.style.display = 'none';
  divpart.style.display = 'none';

} else { divhist.style.display = 'none'; }
};

function revprom() {
    if (divprom.style.display == 'none') {;
      divsimpl.style.display = 'none';
  divhist.style.display = 'none';
  divprom.style.display = 'block';
  divpeda.style.display = 'none';
  divpart.style.display = 'none';
} else { divprom.style.display = 'none'; }
};

function revpeda() {
    if (divpeda.style.display == 'none') {;
      divsimpl.style.display = 'none';
  divhist.style.display = 'none';
  divprom.style.display = 'none';
  divpeda.style.display = 'block';
  divpart.style.display = 'none';
} else { divpeda.style.display = 'none'; }
};

function revpart() {
    if (divpart.style.display == 'none') {;
      divsimpl.style.display = 'none';
  divhist.style.display = 'none';
  divprom.style.display = 'none';
  divpeda.style.display = 'none';
  divpart.style.display = 'block';
} else { divpart.style.display = 'none'; }
};
