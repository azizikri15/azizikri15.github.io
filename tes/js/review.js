const APIKEY = "AIzaSyAFkk-fM6Ggu4iT-Lx4dKQs8iUfzdBqMHw";
const CLIENTID =
  "437032392134-4db5g2adq3l29898k3gpmpbfaa9jalnl.apps.googleusercontent.com";
const DISCOVERY =
  "https://www.googleapis.com/discovery/v1/apis/androidpublisher/v3/rest";
const SCOPE = "https://www.googleapis.com/auth/androidpublisher";


gapi.load("client:auth2", function() {
  gapi.auth2.init({
    client_id: clientID
  });
});

//? Load Client
function loadClient() {
  gapi.client.setApiKey(APIKEY);
  return gapi.client.load(DISCOVERY).then(
    function() {
      console.log("GAPI client loaded for API");
    },
    function(err) {
      console.error("Error loading GAPI client for API", err);
    }
  );
}

function authenticate() {
  return gapi.auth2
    .getAuthInstance()
    .signIn({
      scope: SCOPE
    })
    .then(
      function() {
        console.log("Sign-in successful");
      },
      function(err) {
        console.error("Error signing in", err);
      }
    );
}
// Make sure the client is loaded and sign-in is complete before calling this method.
const PackageName = document.getElementById("packagename");

function execute() {
  return gapi.client.androidpublisher.reviews
    .list({
      packageName: PackageName
    })
    .then(
      function(response) {
        // Handle the results here (response.result has the parsed body).
        console.log("Response", response);
      },
      function(err) {
        console.error("Execute error", err);
      }
    );
}



function signOut() {
  const auth2 = gapi.auth2.getAuthInstance();
  auth2.signOut().then(function() {
    console.log("User signed out.");
  });
}
