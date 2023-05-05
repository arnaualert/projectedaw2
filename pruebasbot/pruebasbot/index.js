                  // input options
const utterances = [
 
  ["hola"],
  ["Problemas con las fotos","problema fotos","No se me muestra la foto subida","no se me muestra la foto subida","no se me muestra la foto ","No se me muestra la foto ","problemas con las fotos","Problemas fotos","problemas fotos"],
  ["Problemas al registra-se","problemas al registra-se","Problemas al registrar","problemas al registrar","Problemas al registrase","problemas al registrase"],
  ["Problemas al inicar session","problemas al iniciar session","Problemas al inicar sessión","problemas al iniciar sessión"],
  ["Como puedo eliminar una foto","como puedo eliminar una foto"," eliminar una foto","Eliminar una foto"],
  ["Problemas Pagament","problemas pagament","Problemas pagament reservas","problemas pagament reservas","Problema pagament tarjeta","problemas pagament tarjeta","Problemas pagament actividades","problemas pagament actividades"],
  ["problemes reservas","Problemas reservas","Problema reservas actividades","problema reservas actividades"],
  ["Gracias","gracias"],
  ["Adios","adios"],
  ["hola"],
  ["Problemes amb les fotos","problema fotos","No se'm mostra la foto pujada","no se'm mostra la foto pujada","no se'm mostra la foto ","No se'm mostra la foto " ,"problemes amb les fotos","Problemes fotos","problemes fotos"],
  ["Problemes en registrar-se","problemes en registrar-se","Problemes en registrar","problemes en registrar","Problemes en registrar-se","problemes en registrar-se"],
  ["Problemes en iniciar session","problemes en iniciar sessió","Problemes en iniciar sessió","problemes en iniciar sessió"],
  ["Com puc eliminar una foto","com puc eliminar una foto"," eliminar una foto","Eliminar una foto"],
  ["Problemes Pagament","problemes pagament","Problemes pagament reserves","problemes pagament reserves","Problema pagament targeta","problemes pagament targeta","Problemes pagament activitats","problemes pagament activitats"],
  ["problemes reserves","Problemes reserves","Problema reserves activitats","problema reserves activitats"],
  ["Gràcies","gràcies"],
  ["Adéu","adéu"]
];

// Possible responses corresponding to triggers

const answers = [
   [
    "Hola"
  ],
  [
    "Asegurese de que el formato de la foto es correcto"  
  ],
  [
    "Comprueba que has escrito los campos correctamente o Asegurate de que el correo exista i Mira que las contraseñas sean iguales"
  ],
  ["Comprueba que has escrito los campos correctamente o Asegurate de haber puesto bien el usuario o el correo i Asegurate de que hayas escrito bien la contraseña"],
  ["Solo pude hacerlo un administardor"],
  ["Comprueba que has escrito los campos correctamente o   Asegurate de haber puesto la tarjeta" ],
  ["Asegurese que la fecha no haya sido escojido por otra perosna o que no hayas iniciado sessión i Asegurese que la actividad este dsiponible el dia que quieres reservar  "],
  ["De nada"],
  ["Adios"],
  [
    "Hola"
  ],
  [
    "Assegureu-vos que el format de la foto és correcte"
  ],
  [
    "Comprova que has escrit els camps correctament o Assegura't que el correu existeixi i Mira que les contrasenyes siguin iguals"
  ],
  ["Comprova que has escrit els camps correctament o Assegura't d'haver posat bé l'usuari o el correu i Assegura't que hagis escrit bé la contrasenya"],
  ["Només ho vaig poder fer un administardor"],
  ["Comprova que has escrit els camps correctament o Assegura't d'haver posat la targeta" ],
  ["Assegureu-vos que la data no hagi estat escollit per una altra persona o que no hagis iniciat sessió i Assegureu-vos que l'activitat estigui disponible el dia que voleu reservar"],
  ["De res"],
  ["Adéu"]
];

// Random for any other user input

const alternatives = [
  "Lo siento no le puedo ayudar",
  "Vuelve a intentar ",
];

const inputField = document.getElementById("input");
inputField.addEventListener("keydown", (e) => {
  if (e.code === "Enter") {
    let input = inputField.value;
    inputField.value = "";
    output(input);
  }
});

function output(input) {
  let product;
  let text = input.toLowerCase().replace(/[^\w\s\d]/gi, "");
  text = text
    .replace(/ a /g, " ")
    .replace(/whats/g, "what is")
    .replace(/please /g, "")
    .replace(/ please/g, "")
    .replace(/r u/g, "are you");

  if (compare(utterances, answers, text)) {
    // Search for exact match in triggers
    product = compare(utterances, answers, text);
  } 
  else {
    product = alternatives[Math.floor(Math.random() * alternatives.length)];
  }

  addChatEntry(input, product);
}

function compare(utterancesArray, answersArray, string) {
  let reply;
  let replyFound = false;
  for (let x = 0; x < utterancesArray.length; x++) {
    for (let y = 0; y < utterancesArray[x].length; y++) {
      if (utterancesArray[x][y] === string) {
        let replies = answersArray[x];
        reply = replies[Math.floor(Math.random() * replies.length)];
        replyFound = true;
        break;
      }
    }
    if (replyFound) {
      break;
    }
  }
  return reply;
}

function addChatEntry(input, product) {
  const messagesContainer = document.getElementById("messages");
  let userDiv = document.createElement("div");
  userDiv.id = "user";
  userDiv.className = "user response";
  userDiv.innerHTML = `<span>${input}</span>`;
  messagesContainer.appendChild(userDiv);

  let botDiv = document.createElement("div");
  let botText = document.createElement("span");
  botDiv.id = "bot";
  botDiv.className = "bot response";
  botText.innerText = "Bot Juan esta Escrivint...";
  botDiv.appendChild(botText);
  messagesContainer.appendChild(botDiv);

  messagesContainer.scrollTop =
    messagesContainer.scrollHeight - messagesContainer.clientHeight;

  setTimeout(() => {
    botText.innerText = `${product}`;
  },2000);
}
