<html>
    <head>
        <style>
            button {
  --c:  #229091; /* the color*/
  
  box-shadow: 0 0 0 .1em inset var(--c); 
  --_g: linear-gradient(var(--c) 0 0) no-repeat;
  background: 
    var(--_g) calc(var(--_p,0%) - 100%) 0%,
    var(--_g) calc(200% - var(--_p,0%)) 0%,
    var(--_g) calc(var(--_p,0%) - 100%) 100%,
    var(--_g) calc(200% - var(--_p,0%)) 100%;
  background-size: 50.5% calc(var(--_p,0%)/2 + .5%);
  outline-offset: .1em;
  transition: background-size .4s, background-position 0s .4s;
}
button:hover {
  --_p: 100%;
  transition: background-position .4s, background-size 0s;
}
button:active {
  box-shadow: 0 0 9e9q inset #0009; 
  background-color: var(--c);
  color: #fff;
}



body {
  height: 100vh;
  margin: 0;
  display: grid;
  place-content: center;
  grid-auto-flow: column;
  gap: 40px;
  background: #F2DCA2;
}
button {
  font-family: system-ui, sans-serif;
  font-size: 3.5rem;
  cursor: pointer;
  padding: .1em .6em;
  font-weight: bold;  
  border: none;
}
            </style>
</head>
    <body>
    <a href="index1.php"><button>CUSTOMER</button></a>
    <a href="vendor-new.php"><button style="--c:#E95A49">VENDOR</button></a>
    <a href="admin.php"><button style="--c:#E95A49">ADMIN</button></a>
</body>

</html>