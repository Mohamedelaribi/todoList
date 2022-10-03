import './App.css';
import { useEffect, useState } from 'react';




  function TodoList(){
    
      const [title, setTitle]=useState([]);

      useEffect(()=>{
         fetch("http://localhost/TodoList/insert.php?getData=1")
            .then((response) => {
                console.log(response);
                return response.json();
            }).then((data) => {
                console.log(data);
                setTitle(data);
            })
      },[])
    }
     
    
    
  

export default TodoList;
