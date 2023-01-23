function sendEmail() {
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "costamaritimacf@outlook.com",
    Password: "36CF2A27B929FACF55FF4395DF453761207A",
    To: 'mateus_s29@live.com',
    From: 'costamaritimacf@outlook.com',
    Subject: `New contact: ${document.getElementById("subject").value}`,
    Body: `Name: ${document.getElementById("name").value} 
            Email: ${document.getElementById("email").value}
            Message: ${document.getElementById("message").value}`,
  }).then((message) => alert("Message Sent Succesfully"));
};
