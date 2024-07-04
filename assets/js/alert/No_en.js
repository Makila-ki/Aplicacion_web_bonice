(async () => {
  const { value: email } = await Swal.fire({
    icon: "warning",
    title: "No recuerdas tu contraseña",
    input: "email",
    inputLabel: "Agrega tu email de usuario",
    inputPlaceholder: "Agrega tu email"
  });
  if (email) {
    Swal.fire(`Va enviamos un correa a: ${email}`);
  }
})()