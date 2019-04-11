function setLogin(username) {
    
    jQuery(function() {
    
        let headerLogin    = $(".header-login:first");
        let headerSignup   = $(".header-signup:first");
        let headerUsername = $(".header-username:first");
        let headerAccount  = $(".header-account:first");
        
        headerLogin.toggleClass("hidden");
        headerSignup.toggleClass("hidden");
        
        headerUsername.text(username);
        
        headerUsername.toggleClass("hidden");
        headerAccount.toggleClass("hidden");
    
    });
    
}

function addToCart(event) {
    
    let parent = event.target.parentElement.parentElement.parentElement.parentElement;
    let name   = parent.children[0].value;
    
    jQuery(function() {
       
       $.post(
            "resources/php/cart.php",
            {
                type: "Add",
                item: name
            },
            function (data, status, xhr) {
                
                console.log(data, status, xhr);
                
            }
        );
        
    });

}


function removeFromCart(event) {
    
    let parent = event.target.parentElement;
    let name   = parent.children[1].children[0].innerText;
    
    jQuery(function() {
       
       $.post(
            "../php/cart.php",
            {
                type: "Remove",
                item: name
            },
            function (data, status, xhr) {
                
                console.log(data, status, xhr);
                
                if (status == "success") {
                
                    updateTotal();
                    parent.remove();
                
                }
            }
        );
        
    });

}

function cancelCheckout() {
    
    jQuery(function() {
       
       $.post(
            "../php/cart.php",
            {
                type: "Cancel",
                item: "Placeholder"
            },
            function (data, status, xhr) {
                
                console.log(data, status, xhr);
                
                if (status == "success") {
                
                    window.location.href = "../../index.php";
                    
                }
                
            }
        );
        
    });
    
}

function submitCheckout() {
    
    jQuery(function() {
       
       $.post(
            "../php/cart.php",
            {
                type: "Submit",
                item: "Placeholder"
            },
            function (data, status, xhr) {
                
                console.log(data, status, xhr);
                
                if (xhr.statusText == "error") {
                    
                    window.location.href = "../html/login.php";
                    
                } else if (xhr.statusText == "success") {
                    
                    window.location.href = "../html/account.php";
                    
                }
                
            }
        );
        
    });
    
}

function changeTotal(amount) {
    
    jQuery(function() {
       
       amount = amount ? amount : "0.00";
       
       let total = $(".checkout-total");
        
        total.text("Total: $" + amount);
        
    });
    
}

function updateTotal() {
    
    jQuery(function() {
       
       let total = $(".checkout-total");
       let amount = 0;
       
       $(".checkout-item-price").each(function() {
           
          let price = $(this).text().substring(1);
          
          amount += parseFloat(price);
           
       });
       
       changeTotal(amount);
        
    });
    
}

function logout() {
       
    document.cookie = "BlockKey=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    
}