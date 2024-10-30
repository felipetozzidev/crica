const menu_elements = document.querySelectorAll("ul > li > div")

menu_elements.forEach((element) => {
    element.classList.remove("active")
})
let element_active = "none";
let allow_again = true
let switch_class = 1
let classe
let class_allow = true

document.querySelectorAll(".item_menu").forEach((element) => {
    element.addEventListener("click", (element_selected) => {
    
        if (allow_again == true) {

            element_selected = element_selected.target
            allow_again = false

            console.log(element_selected.getBoundingClientRect())

            menu_elements.forEach((element) => {
                if(element_selected == element){
                    element_selected.classList.toggle("active")
                } else {
                    element.classList.remove("active");
                }
            })
            if (switch_class == 1){
                switch_class = 0 
                element_active = document.querySelector(".active")
            } else {
                switch_class++
            }
                if(class_allow == true){
                    classe = element_active.querySelector("i").classList[0]
                    class_allow = false
                }
            rest_of_elements = document.querySelectorAll("li:has(div:not(.active)) > div")
            let elements_text = document.querySelectorAll("li:has(div:not(.active)) > span")
            console.log(element_active)
            console.log(element_selected)
            console.log(classe)
            if (switch_class == 0) {
                rest_of_elements.forEach((element, index) => {
                    elements_text[index].style.marginTop = "-60px"
                    elements_text[index].style.scale = "0"
                    
                    element_active.querySelector("i").classList.remove(`${classe}`)
                    element_active.querySelector("i").classList.add("ri-close-line")

                    setTimeout(() => {
                        element.style.scale = "0"

                        setTimeout(() => {
                            element.style.display = "none"
                        }, 500)
                    }, 300)
                })
            } else {
                rest_of_elements.forEach((element, index) => {
                    element.style.display = "flex"
                    setTimeout(() => {
                        element.style.scale = "1"
                        setTimeout(() => {
                            elements_text[index].style.scale = "1"
                            elements_text[index].style.display = "flex"
                            elements_text[index].style.marginTop = "0"
                        }, 500)
                        menu_elements[index].querySelector("i").classList.remove("ri-close-line")
                        element_active.querySelector("i").classList.add(`${classe}`)
                    }, 300)
                })
            }

            if (switch_class == 1){
                class_allow = true
            }
            setTimeout(() => {allow_again = true}, 1000)
        }
    })
})