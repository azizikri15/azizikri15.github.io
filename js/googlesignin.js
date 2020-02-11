// function onSignIn(googleUser) {
//     var profile = googleUser.getBasicProfile();
//     window.location.replace("http://zikriapi.000webhostapp.com/review.html");
//     console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//     console.log('Name: ' + profile.getName());
//     console.log('Image URL: ' + profile.getImageUrl());
//     console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
// }

function onSignIn(googleUser) {
    const profile = googleUser.getBasicProfile();
    // window.location.replace("http://zikriapi.000webhostapp.com/review.html");
    $("#pic").attr('src', profile.getImageUrl());
    $("#name").text(profile.getName());
    $("#email").text(profile.getEmail());
    $("#id").text(profile.getId());
    $("#user").show();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}