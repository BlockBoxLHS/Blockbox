function createProduct(container, image, name, serialId, price, rating) {
    
    jQuery(function() {
    
        let productHtml = $(".product-template:first");
        
        image    = image ? image : "laptop.jpg";
        name     = name ? name : "empty";
        serialId = serialId ? serialId : "0";
        price    = price ? price : "0.00";
        rating   = rating ? rating : "5";
        
        container = $(container);
        
        if (container == null) { return; }
        
        container = container.find($(".products-container-items"));
        
        let clone = productHtml.clone();
        
        clone.find(".product-image").attr("src", "/resources/assets/images/products/" + image);
        clone.find(".product-name").text(name.substring(0, 28));
        clone.find(".product-id").text("#" + serialId);
        clone.find(".product-price").text("$" + price);
        clone.find(".product-rating").text("Rating: " + rating + "/5");
        clone.find(".product-input").attr("value", name);
        
        clone.toggleClass("product-template");
        clone.toggleClass("hidden");
        
        clone.appendTo(container);
        
    });
    
}

function createCartItem(container, image, name, serialId, supplier, price, rating) {
    
    jQuery(function() {
    
        let itemHtml = $(".item-template:first");
        
        image    = image ? image : "laptop.jpg";
        name     = name ? name : "empty";
        serialId = serialId ? serialId : "0";
        supplier = supplier ? supplier : "Fireport";
        price    = price ? price : "0.00";
        rating   = rating ? rating : "5";
        
        container = $(container);
        
        if (container == null) { return; }
        
        let clone = itemHtml.clone();
        
        clone.find(".checkout-item-image").attr("src", "/resources/assets/images/products/" + image);
        clone.find(".checkout-item-name").text(name);
        clone.find(".checkout-item-id").text("#" + serialId);
        clone.find(".checkout-item-supplier").text("Supplier: " + supplier);
        clone.find(".checkout-item-price").text("$" + price);
        clone.find(".checkout-item-rating").text("Rating: " + rating + "/5");
        
        clone.toggleClass("item-template");
        clone.toggleClass("hidden");
        
        clone.appendTo(container);
    
    });
    
}

function createEmployee(container, image, name, job, description) {
    
    jQuery(function() {
    
        let employeeHtml = $(".employee-template:first");
        
        image       = image ? image : "laptop.jpg";
        name        = name ? name : "empty";
        job         = job ? job : "empty";
        description = description ? description : "empty";
        
        container = $(container);
        
        if (container == null) { return; }
        
        let clone = employeeHtml.clone();
        
        clone.find(".employee-image").attr("src", "/resources/assets/images/" + image);
        clone.find(".employee-name").text(name);
        clone.find(".employee-job").text(job);
        clone.find(".employee-desc").text(description);
        
        clone.toggleClass("employee-template");
        clone.toggleClass("hidden");
        
        clone.appendTo(container);
    
    });
    
}

function createOrder(container, list, id) {
    
    jQuery(function() {
    
        let orderHtml = $(".order-template:first");
        
        list = list ? list : "empty";
        id   = id ? id : "empty";
        
        container = $(container);
        
        if (container == null) { return; }
        
         let clone = orderHtml.clone();
        
        clone.find(".list-item-list").text("Items: " + list);
        clone.find(".list-item-id").text("SerialID: #" + id);
        
        clone.toggleClass("order-template");
        clone.toggleClass("hidden");
        
        clone.appendTo(container);
    
    });
    
}

function createWishlist(container, image, name, serialId, price, rating) {
    
    jQuery(function() {
    
        let wishlistHtml = $(".product-wishlist:first");
        
        image    = image ? image : "laptop.jpg";
        name     = name ? name : "empty";
        serialId = serialId ? serialId : "0";
        price    = price ? price : "0.00";
        rating   = rating ? rating : "5";
        
        container = $(container);
        
        if (container == null) { return; }
        
        container = container.find($(".products-container-items"));
        
        let clone = wishlistHtml.clone();
        
        clone.find(".product-image").attr("src", "/resources/assets/images/" + image);
        clone.find(".product-name").text(name);
        clone.find(".product-id").text("#" + serialId);
        clone.find(".product-price").text("$" + price);
        clone.find(".product-rating").text("Rating: " + rating + "/5");
        clone.find(".product-input").attr("value", name);
        
        clone.toggleClass("product-template");
        clone.toggleClass("hidden");
        
        clone.appendTo(container);
        
    });
    
}