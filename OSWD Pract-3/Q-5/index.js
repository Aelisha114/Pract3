const express=require("express");
const app=express();
const port=3000;

app.get('/',(req,res)=>{
    res.json([
        {id:1, name:'Aelisha', age:25, grade :'B'},
        {id:2, name:'shivansh', age:8, grade:'A'}
    ]);
});

app.listen(port,()=>{
    console.log(`server is running on http://localhost:${port}`);
});