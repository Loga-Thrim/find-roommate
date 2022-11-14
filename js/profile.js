var loadFile = function (event) {
  const form_data = new FormData();

  form_data.append("avatar", event.target.files[0]);

  fetch("../api/change_avatar.php", {
    method: "POST",
    body: form_data,
  })
    .then(function (response) {
      return response.json();
    })
    .then((data) => {
      if (data.success) {
        Swal.fire({
          title: "เปลี่ยนภาพโปรไฟล์สำเร็จ",
          icon: "success",
        }).then(() => location.reload());
      } else {
        Swal.fire({
          title: "เปลี่ยนภาพโปรไฟล์ล้มเหลว",
          text: "โปรดลองใหม่ภายหลัง",
          icon: "error",
        });
      }
    })
    .catch(() => {
      Swal.fire({
        title: "เปลี่ยนภาพโปรไฟล์ล้มเหลว",
        text: "โปรดลองใหม่ภายหลัง",
        icon: "error",
      });
    });
};
