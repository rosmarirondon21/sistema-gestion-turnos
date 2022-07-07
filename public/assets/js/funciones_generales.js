
async function consultaAjax(url, param) {
  let result;
  try {
    result = await $.ajax({
      url: url,
      type: "POST",
      data: param,
    });
    return result;
  } catch (error) {
    console.error(error);
  }
}
function validarMail(email) {
  var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

  if (regex.test(email.trim())) 
    return 1;
  else 
    return 0;
}

function doTheThing(url, param) {
  return new Promise((resolve, reject) => {
    $.ajax({
      url: url,
      type: 'POST',
      data: param,
      success: function (data) {
        resolve(data)
      },
      error: function (error) {
        reject(error)
      },
    })
  })
}

function cerrarSesion() {
  document.cookie = "idUsuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
  document.cookie = "nombreUsuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
  document.cookie = "nivel_usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
  document.cookie = "imagen=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
  document.cookie = "correo=; expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/;";
  document.location.href='?c=index&m=index';
}