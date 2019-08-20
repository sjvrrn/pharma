 <script>
 let str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ123';
 let regexp = /[A-Za-z]{0,30}/gi;
 var result = str.match(regexp);
 if(result)
 console.log('true');
 else
 console.log('falese');

 </script>