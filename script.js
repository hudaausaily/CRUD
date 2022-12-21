showForrmCreate = () => {
    document.getElementById("form").style.display = "grid";
    document.getElementById("main").style.width = "70%";
    console.log("HELLO")
}


// saveStudent = () => { 
//     const stuName = document.getElementById('StudentName')

//     Students.map((ele) =>{
    
//         //Find index of specific object using findIndex method.    
//         feedloc = Students.findIndex((ele => ele.id == stuId ));

//         if ( ele.id > 0 && ele.id == stuId){
//             stuId = ele.id + 1
//         }
//     });
//     var obj1 = {
//         id: stuId, 
//         name: stuName.value, 
//         atten: 'default', 
//         task: 'default', 
//         feed: 'default', 
//         totaltask: 'default',
//         totalday: 'default',
//         coacTask: 'default',
//         coachfeed: 'default',
//         coachATTE: 'default',
//     }

//     Students.push(obj1)
//     localStorage.setItem("Students", JSON.stringify(Students));
//     document.getElementById("studcard").style.visibility = "hidden"
//     show3();
// }