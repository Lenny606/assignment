const getUsers = async () => {
    const response = await fetch("/api/v1/users");
    //    console.log(response);
    const data = await response.json();
    console.log(data);
    //    data.forEach(element => {
    //      const target = document.createElement("li");
    //      target.innerHTML = element;
    //      document.querySelector("#ul").appendChild(target)
    //    });

}

console.log(getUsers());