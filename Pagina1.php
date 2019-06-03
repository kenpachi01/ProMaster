<?php 
 include 'Conexao.php';
 
 $consulta="SELECT * FROM  tabela1";
 $sql_query = $conn->query($consulta) or die($conn->erro);
 $linha = $sql_query-> fetch_assoc();
?>
<html>
        <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="Cacalcss/pag1.css">
        </head>
        
 <h1 style="color:black;">Informação de computação </h1>
 
 <head>
 
        <?php 
        session_start();



        if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true))
        {
            session_unset();
     
            echo "<script>
                alert('Esta página só pode ser acessada por usuário logado');
                window.location.href = 'login.php';
                </script>";

        }
    
        $logado = $_SESSION['email'];
        ?>



    </head>

 
<body background="http://infoteam.com.br/wp-content/uploads/2017/08/Montagem-e-Manuten%C3%A7%C3%A3o-de-Computadores.jpg">
    

    <table style="width:80%" align="center"> 
        <tr>
            <td>
 
        <img src="http://s2.glbimg.com/roYHf_QKq60udXYAFWqkv-Atvas=/695x0/s.glbimg.com/po/tt2/f/original/2015/10/07/processador-da-intel-alcancou-altissima-velocidade.png" alt="Girl in a jacket" style="width:150px;height:150px;">   <h4>Processador:</h4>   
             O microprocessador, ou simplesmente processador, é quem faz o trabalho pesado das coisas.<br>
        Ele opera com números e símbolos representados no sistema binário. Tudo o que o computador vai fazer<br>
        passa pelo processador. Ele é o cérebro da máquina, é a sua unidade mais “inteligente”.<br>
        <br>
        <br>
        <img src="http://s.glbimg.com/po/tt/f/original/2012/03/05/ilustracao.jpg" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>HD:</h4>  
             No disco rígido, ou disco duro, estão armazenadas todas as informações e programas de um computador.<br>
        Ele é, normalmente, o principal meio de armazenamento de um PC. Arquivos de qualquer formato que forem salvos<br>
        serão guardados nele.<br>

              A denominação HD (hard disk) se dá porque ele tem o formato de um CD onde são gravadas informações a laser.<br>
        Ele tem uma memória não-volátil, ou seja, os arquivos não são perdidos quando o computador é desligado, <br>
        sendo considerado o principal meio de armazenamento de dados em massa.<br>
        <br>
        <br>
        <img src="http://s2.glbimg.com/pIYWaMUeKXIEpVKCyixehYrvhXc=/695x0/s.glbimg.com/po/tt2/f/original/2016/07/19/memoria-ram-1.jpg" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>Memoria RAM:</h4> 
               A memória RAM é usada pelo processador para armazenar os arquivos e programas que estão sendo processados.<br>
        Ela funciona, por exemplo, como uma mesa de escritório. Quanto maior a mesa, mais objetos você pode colocar em cima dela.<br>
        A memória é como se fosse essa mesa. Os arquivos que ficam nela são geralmente aqueles que o processador está rodando.<br>

               Ela tem a capacidade de armazenar os arquivos temporariamente, e a cada novo processo do computador, um novo arquivo entra<br>
        na memória RAM. Isso quer dizer que, quanto mais você tiver de memória RAM, mais coisas você poderá fazer ao mesmo tempo.<br>
       <br>
       <br>
        <img src="http://www.gpj.com.br/content/images/thumbs/0024467_placa-mae-desk-positivo-ot360-c-cpu-celeron-m-310-12-c-mem-integ-256mb-svr-c-espsoem_600.jpeg" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>Placa mãe:</h4> 
               É na placa mãe que são conectados todos os componentes do PC. Ela é responsável por interligar o processador com a memória RAM, <br>
        com o HD, a placa de vídeo etc. Existem vários tipos de placa mãe. Algumas suportam determinadas peças, outras não. Cada uma tem <br>
        suas características, como o tipo de soquete, o chipset, as formas de conexões, entre outras.<br>
       <br>
       <br>
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEBUSExIVFhIXGRgZGRcXGBoYFRsXFRcXFxYbGhoYHSggGBomHRUdIjEjJSorLi4xFx8zODMsNygtLisBCgoKDg0OGxAQGzclHSUtLTcrLSs3MDcrLjcyLy0tLSswNzUrKy8tKy83NSstLS0tKysvKy0rLS0rLy0rLS0uLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcCAQj/xABAEAABAwIDBQYCCAUEAQUAAAABAAIRAyEEEjEFIkFRYQYTMnGBkQehI0JSYnKxwfAzgrLR4RVDksJTFGNzotL/xAAaAQEBAQEBAQEAAAAAAAAAAAAAAQIDBAUG/8QAMBEBAAEDAwIDBgYDAQAAAAAAAAECAxEEITESQVFhcQUTIpGx0TJCgaHh8FJy0hX/2gAMAwEAAhEDEQA/AO4IiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgLHiK7WNL3uDWNElzjAA6krX+1HbPD4MFpPeV+FNpuPxn6g+fRch7R9psRi35qzwKYuKYsxvpxPUyVMjueyttYfEgmhWa+NQDDh5tNwPRT1+XsJtVwIqUw5uW4c1xDm9Zb4SeAJW/dm/ihWaAKsYin9oECoPUWd5ET1TI7GipdhdqcLi7Uqoz/8Ajfu1B6HxeYkK6VBERAREQEREBERAREQEREBERAREQEREBERARFpnar4g0MNNOjFauLQD9G0/ecNT0HyQbVtHaFKhTNSs9rGDiT8hzPQLl3an4j1Ks08JNKnoah/iOHT7A+fktM23tytiX97iKhceA0a0cmtGn5qqol1U2BFO8kEBx/mNm+knyUGSvjWN8dQZuMm5PExqo7NqUny0Ne4HkwkfkrXDYSjT0p0m9SC8+74upH+rUwcrasn7LIOn3WNJCixGeFA/ZQDwe7fDvuuEnW0jUibdVk7uvTJDcLUcOcR8lLx21wS0F9QGR9Wpe/34hef9fo83/wD2H/ZFmmY5Q3bQqtIzYaqDzHAjrwW49mPinXpEU6ju8b9itZ/8tTj6ytbG2qZ0qkerv+wKhYyu2oCC4OB55SflBRMP0HsHtthMTDQ/u6h+pUhpJ+6dHehnotkX5KFd9HRxLORuPncLcuzHxGxFCGipmYP9uoczf5XeJv5K5MP0Gi07YPxEwleG1D3FQ/bM0z5P094W4NcCJBkHQjRVH1ERAREQEREBERAREQEREBEXxzgBJMAceCD6q7bm3MPhKfeV6gaOA1e48mtFz+nFad2s+JdOlNLCRVqaGof4TfL7Z+XU6Lk+1tqPqPNavUc954uuegAGg6AKZG2dq/iBiMVNOlNGhyB+kcPvOGg6D3K0utiWMbLj5AeIxyH66fkoD69Sp4BbgOfVx4NHIe+qh1MoOZ7s3C2hjl90enIc1FiEpwdV+kqHu6I0HE9BxceqP2i8jLSGVjePIdToEftGjAe5hcdGggaDkJIA9OanbNNLElrMuWTDQ4MawnUxLrWBk9LlZ6p8H0I0lrOJu08efy43lRVKzSd9znnkDA9zP5KTQq1WQ6nTp0eT3kB3p3jvyCzso0HsL6T8jZAJAIudBLhc9BCiVNlFm8Wd4T9pxA9m6+6dUOc6O7THVTvHOYnOPXwWGF26Ghwr12ukG7O9DgeFg0MPyVt3OdgLe908Qc3Ua27yR5LXxScJcH0KbABIbTa9zZ4EtY4+pKmYLHBtbK6u6oHBoDN8bxAgjQXPPmsVRtmHfS6jprim7ETE7cR/zKPj6NRsnOHD7zbj1gquLjxaD+H/AB+q2LGPbmu57Ojxb3cCI9VV1NgODTUpukDxBpNr2OXl1BPkkXI/M7a/2fFuOu1vHfeNvpP7JGADalGcrgG2c4XbzGYXix1iOqiYvZ+Xeabcxp/gdRKvuy9Gq2k6o0tdLju2BcAALP4O6HposmKw7XS+kI+0wiBPEOH1XdR81ia5ip7bGio1FimKqcVY2mNp+1XpOJ82u0MXUZxt7j/P7utn7O9ucRhSMlQtZyO/RPOx8B9j1WsYyl3ZkA92TBadWu5dP3qNcfhPNp+Y/Q/vz7xOXwL1mbdc0y7/ANn/AIn4eqAMQ3unH67d+kfa7fmOq3nDYhlRofTe17Do5pBafUL8mMYWGabiJuPsnzGk8Fs3Z7b9el9JQqOpvmHAHdkfaabOHmFpwfpJFzXYPxRFm4unH/uU7j+ZhuPQnyW/7N2nRrsz0ajajfunTzGoPQqoloiICIiAiIgIseIrtYxz3uDWNBLnEwABckk6Bcx7WfE6ZpYIdDWcP6Gn8z7cUG8dpO1GGwTZqvl5G7Tbd7vTgOpsuO9q+2uJxpLSe7ocKTTY/jP1/wAui1rG4slxqVHuc9x1JzOcT8yVJ2Y/CuYTVe9rg6ABBtAPAG+vsoIRIEn1Poo9OnbO673aTfK3orfaNHCmkRSdUc+0SDl8QmbcpVdWaZ0PIIIOJr/7TOMAn8h5cfUqC5uepl+rMD8I1PtJU3DYIghziBB8MjNPlMqTSwNJhG8JMg7wJAIM2HRZ6nro0lVVPVMxEecwpHUi+oOAPyaBPyAU/DbMr4mnShjRhzXNJsQHF5Y0wTxEQJOhceZUqq6g0w0tcYdM5tA0k2y6Ryv0UnAbRYGNpgjug5z8tMEAPgCfpALw0a8k6p8GblmiicdcT6Z+yixWzKriM38Nsw1s2AP1Rxzc+t162dWrVHsFNoZRaQ2MuYSec3e8/uFtuNouFQNLoMTDshIOXMPDzboei8d66h4aYa0AMDg7ea+rLpBiznNa4T+IawpnOy0UdNM3KauMceL67Z1OmXGo5rXQd2JcB94XA8nEHooefDXzvJg7rmUG7oGmhAbHSVgxZa14BILTF2kuyniTugm3ADh1XoYNgzObiKJaIOU5hmkfVESD0MeqRTDFeorrq6p5Tn0nEF9N4rtiSB/EDdScsDMPIHzXjZuEr95mosJoxLo0MiYZNi4gG2hi/BeqOFc1jalN9GZ3Wh7u9DhfwsMi8kEnziQrXAYirTbmc/KN1+4L/SNztid0WcDEWDlyuUREPq6XW3tTHuLnxd4nvGPOeyZiNmMbSOIomWDLYCM1MgHT7TZsekLztKixp75hscocPtNOh8xM+UqDhm1+40rCkATMANy6zLhe116rYUigC/N4J5QItK5TEQ+pT73p7cdXMbTHfy9FR2kohz+7Z4ntnpukZSTwBNp6lWWC2I2ixlNxD21QWP5ZiCQRy5egXiq4CkQ5pzRrvcII4wrXFNomnSMNzh9OZFzcB1zqIJWonaIy56ixci5XerpjOInvtG/l3xu0s4Ko0vpFriWOOUwYcNDHORBtyVhsSgKdUurU3FpbBE5TmBGU3ItEj2Vp8Rtl06OOpupx3dWi+wjLLJB06OHstWw9NpMRa35hemmdn5m9T01zDZNrbQwwp5WUwx5Ihzn5iLgmwJ4ArDgsdVpVA5jnMdwcwlp4HgbhRKmBpkRlt6f2WWmwNEDgI9lXF0TYXxOqshuKZ3jftthtT1Hhd8l0rZG1KWJpCtRdLDzBBBGoIPFcD2dsx7gXuBLQCQNC4gaBdq7DUcuBpboaTmJA4HMePHRWJF+iIqCIiCHtjCirhq1I3D6b2f8AJpH6r8vii9ngMj7J/Q8F+rF+bNtYY08XWpRAY94B8nuEewHupIpi9lTddLXC8aEHoVkfQO6GuygCLSHE8SSPPos1fDtcN4T+fuo2SozTfby+sP7qD4/Bg3LnOP3iT+ZUbEw0TAs4T5Tf5KfSrtdofTj7KNj6BLXRxHzCBU2g7IGNa1obAMauyxFzoLLBUxDRJLoAGaYmeU9DMTwlVrHmJg5hYwbxoD15H0UulLmGm4Q02lzbieXEXvyUxERs9FVd7UVb7y6BT2a2ts6aJHdZczRAs+2p1mdb3C17/SmihlpmKocQaL5NRlT6wEAmOXAg8ZUTZ4fhWlzKlRtMjK8hxa6CeEROuntxnPsvbmHaRLalDEAktryalKo06NqsFwPvNkjnwXhppuUZmmcxn+5/jd7L2kpsRHv/AMX+MeHjnhD2hSqGpvtqCuAJa45SA0ANILrub5DopuF2wx7TTrs1aGvicrgDLTYE03tNw6CLkGxIVztXb7a9Etr02TG44bzc0RLKoNvWCtRFBzW94YJEdLnS4sfbgulu5VVGaoxK6an3kVURHw43x9fX0WJ2eHXpVqdRvJ7msePVzonyc5KGBIcWmiJ1BdWphvLU2+ai4TFGZMT95gcfcXVhSxpzghwBgwMjyD1IJgld+tKvZ080zt6T9kuhg2MOaq5v/wAbM2Q9HO1cOjJB+03VT9m4xmIxDWVGxSJLnl0AutxAsBoI0AsOBFKK4eZJJ4xlbTYfRpM+yl0aoJBq7zRoNG+w8R/cLnVVl9XTezYs0TVPeOZ+GP33n5b93TKhZjXMo0xGEYQajo/iFulNv3Z1PSPPFtfDDFYruWAd0yDWfwhpzCmOriBPIAqj2ZVxNRh7qaVL7TrPI5NaPD5lZ8Ntt9Kn3NJjCRcwCYni8zqs9UPLOnqiZ6atuPOfKIYe0OzmueKNMb7iaj40bSBgT1c6w9VX7SYadelTO9BFQjozSfM2UintCpSa42NR5kkiXOPD0A0HBQHB4z1qjiXvMk+WgHQD9VzmY7PqWqbk5puzGPzeURxH98/JVdvdpCo9pyhpAyAD7xBcfYKrwdAzm4L1jKBrV87zutjK3r1U2mwkwBdeyiMUw/M669TcvVTRGI7foGeAVxs/ZrWt76tZouBxPGBzPl6c1lwmCZRaH1RmeZyM4uIBMX004+vJRRXq4l4y3NnNjwtEhr2mCCG6O5uEiwK08TOdpVH12ZBuAgNY3Q03iM1jBI1J0EkCSu37Ap5cLSH3Af8Alf8AVcowGz20WgNudMx1iSQOjRNguxYWnlptbyaB7ABIGVERaBERAXDPiHhcm0a/Jxa4fzMaT85Xc1yb4t4aMXTfwfSA9WOdPycFJHPy1ZsPhw5pgbwkkzwi1puJGo0lA1S8HSa6mQYsTrHJsxxmx0WRUYzAXh4LXjiLHn66qK/OzxDM37Q19QtvGJc1vcva2rS1AiKgIblaQ4QXAWHOGxYKFW2e10OoOLwXBuSJqSQDoBcSSJtMJkawcOx+80weY5+SnbODJyVIDuE+B3lPHofmlfAAklssf00nqFGqEttUbbnq0/2WaqYqh7tHr7mlqzTG3fze9q4Uu+ibL6bYOWbtcRwPERwOklVTNnOFmOBuJYRcTzabjzVlSZlqNqtvBBIJ8QEWm9oEXWTaO1WVQWvphh0aXWcBNt77UWlpgqxHTDnXVOpv7bZnbPER/CDhaWUmGTNpbe3kf8r1tSm0U293LHzvAtLeB4OgH0U7A4dw3m1Y5ZgHD3sfmvuOwxqMLHlpBi7XGQQbWcCPmuEVfFl+kr0NVOmm3bpnjwid/KY3+cK/BNqHWmJ55SfyhTmU3yPowT+B36lQMHgO7zAl5h0eBtiAOOe4uFJe2nFw/wD4t/8A2tVfiebTT1aXPeP9+3pssXUn9GHkQxs+4kL405XAl0u9XH3No9UoZbQDHWGD5ZpWUCTAE+7j6cPkub7VNuY+KKcefTEfvVM/Rb7Nr94Ppq5ZR4tacpPQu19AtlwuJ75n/p8DQDKXGs8ZaYHEtHiqHr81pNBozTlk8rGD1A8KvsPterlyOrDD04uWgGoRxAdoD5XSNtnytXazmuiflOfnVtH6QttqYTD4YBheatciXaZ4FzbSmzqeHOFou1dpOrOgWpjSP06dePssu1NpNeDTotLKMyZM1Kh+1Vcbu5hugUfA4J1R0NFl3poiN3wb2rrqp93E7POFoFxytCv2sp4VoJg1TYAmwJ8JeeF4HradV7L6eGblbBqSAXaimXDdnmSSP8BVFCi6q5+d0WPeXkyLNc2D4jEZtAWEBdHkfHd5XcXEkSN4keB9MgggEWJGVwboDmmSvOJ253RLaMakknmTJJUXa20v9umMrRy66+vVQapbQaH1BmqOuykeXB9Tk3kNT5Ijduyr62Iq06lYQ3O1tO8CXw3NH1uQ87Lui4h8KaDqzqVWqczjWLr82C0cgALBdvVgERFQREQFz34vYaaeHqcnPZ/zAcP6CuhLVPibh82z3O+w9jvc5P8AupI42Wr3TbILdCSCPSR+vyXmi8OaHCb+6z4XxQSACIuJHqPTVZVmqY4gQ5l4PGx5Ecx08r8F7qs33ObLXNJALfEYkG4MOtw11C91MPZrYuQdTuOIAALHcSTPEFeRU3i4DxcPrfoHXnrrqgibTNRzs74J5gAa84Fvy1hQyOGo5FWpMtbfiRr5Wk/0u5KPXw4k6AjiPD6jVv5IKWrgIvTOU/ZPhPlyUfPfK9uU8jofI8Vc1KZGo/t6HiFlxOziaYccr2ECYvlJix4tM29EWJmmcxypKeGp8sp+6S38lIAa367v5i3+0/NeKuBc27Dmb9k6jyPFYWvBsRfiDqsTbzxL7Gn9se7pxctxVPjHwz+uOVpRY6o0iZbGpbIjzBH7CrahhzmwwkW0d899Z2YqoG5Q9waNACY9lhrYdodmAuR++iTbnDNv2lbi9NU0YonmImfnzvLPh6ziAZAHLIyP6Z+amBzSN42++4u8oDjZU2Ge7LFwRI/sV9w0xdZm1M8y9n/t2KLdMUWc1RHNS4rbRyiKcTzOgVaSScziXOPE/pyX1WeyNkurOBNmjnot026aeHytX7Sv6raudvCOGLZezXVXWFv37DqrzE4plBnd0zeSx9QRuGOAJ4TPIZXTJXnGbSpsZ3dMxT8L3gw6bibXDYaRPHRqp3PcC6RdpyVWQN5pMtdFuOjZ/wB1rnarTwPr3iZcCSIbUGsscYa7QkzGWZl5a3gVGrVSJ39+C0kHxtI3TrE6aWbcC8lSssRO8Wtmdc9Fw1mLmIMzJIIGir8RhXmtTaHRTm7iQIpyJOsQ3MdLCY4FUfQDSZngWZUqNBALd3Kxlj950+gVfTwz8bXz5QzdHePJ3ZA3nuJ4nXpZbNj8HTc+s2rVysFFlxByy9paxoEg/wALQaypL8LSp0MhaQIBDeMHLL3c4DvIdRMsjdPhphWiqzIHBjGuABEeCWlwE8S7XkAumLRvhlhqvdl9RsQMjXGZInW99ANb6TdbyrAIiKgiIgKo7XUM+AxDYk908gdWDMPmFbog/OFOs0nLo7kdfMcx1CzUXDOJ00vour9q/h9h8UC+mBSra2swnmQLtd95vsVyna+y8Tg393XpuI4OAkxzEWeOovzCzgTn0j9U21gm0+tv2br6KgOVhEhswDZ0uvY+d7/kqvDYgjepukHlcKRUxQImL8QeHVp5cwbX9VlWSq7K4Sb5Qcw1vwPOCOPTRZGv3sxIiDfhcEC+rfWQV9rtI1uOfHXjP7vfksTWQZabdNL9P37IPRpbs+7SLecDTzavOHaWPaWlzdDAIkjgWnwvWdtQGz7ciPcER+mtrQEaA50EagSDxgRNrO08Qg6oPWLwFNwzNIEkDM0HutTOYHeokC5FxAMKnx+z75ajSDwdxjm0jUK5w5ynMHEOaTDpB6QD9bllPOLar7XxT2gA0waX1mXy6mSAZNImdWmJ48EGp1cM9l/G3mPEPMcfRY3OzNMHyPJXDFgxGCa643Xcx+o4rWUVlOgAJJOfj9noRyPovYcOa9VabmWcLcxof7K62bs+m0GrXeAGBpLRd0E5WWFySbDnwQNkbGzA1Ku7Tbck8hqs+0NoBwaxm7QMZTcEvsR3gAkAlzd3UzJsveNrVK8gDKymZZlILIJytBiQ6oQ1xA0bN+ah1KJEyJDj9IxrpyEgy5upGr5dE7uUQorxUBMEtOawqM4mIyvHDONxxMENg80awNsIL2tGWJAdSMnLBgk5Rpq7u7xCztDmuAEOqgcB42AOJYBMGxcAIsCCdL46UAANOsmm7WHEjMDESCcpmJdnMQ0lEGtgtym93U3HnJDmE2m5OmodDdZWF1MnKGCCXTSmN1wOU0zPC5brAloEkkrLadMoOo07uqBlHh4G7JA4AN0lIF80iTDxoW1BZrwGQRItYbpBAl11RFxuznOrVZi7t0jwl1Nj84nRoBsSdF0fst2QdWrGvWdNMHd8iAC0cwNPSdTb52J7GuqZquIEMdGZtocWumRAtMAkDS+pJK6dTYGgNAAAsANAEiB8pUw1oa0ANFgAvaItAiIgIiICIiAo20MBSrMNOqwPYeB/MHUHqFJRByXtV8NqlMmtgyXDUt1f6jSoPZ3mtGNWDlqNyOmJ+qTyngehuv0mtd7Tdj8PjAS5oZVI8bQL/jGjx8+qmBx+ljIgP05gX6fvos1Vk7zI5+abf7MYrAuhzc1LgQZafwuPhP3XeirKFUG7SQRqNHDzWcKsQ6dRB4yNSNdfP+/JfXD1BOh/MHWfn6LHg6gy5Tr104f2/spHdnUXHLp0P79VB5H1gLzAIN3ag3Gj9Ohus1WqO7EG8i4MQQLi+h6Hh5rC2HCdf09eX7KEG5PkXRf+YHUefTRBExTQKjwBADnCPUrFCyYhwL3kaFxPoSVjAVHtkExbUSrrHPpspvLWNdWqNDsmmbLlaCTwAkGenRUdGkA8u4mJ9NFsNQCRlaDVdSgu+y0aT6uJA45SoKbEVqTqTWN/hlvAkNGWMuYXNybyJd3lrKO99yG3e2M0xLwAJPEWkSYgB86r5VaBncCCDPeMafDcguBvlIOpjdyZQs2IbTLGBoc1wjJxEDMct5iBo12hEngEiMDC1o3Wh27P0TjfKTBDXDh9V0EXLSTYr7ALXW3S6Ht1DXGWhw1sd5tgJs0QACvjo3pbumz2xOVxOrZ1BdIixcHxYQsl82mZ0c571jgACDxOUC4MkstoSqj4QTmneNg8C+dtgHiJE6XA1EDUlb92J7HFxbXxA0s0aSBGWRpIjhpoOJWXsV2Nu2vXEgeAHUA8D5SfKSBZdEaIEDRWIBrQAABAGgGi+oi0CIiAiIgIiICIiAiIgIiIPFak17S1zQ5psQRII6grnXav4atdNXCWcL92TBH4HH+l1l0hEH5wxLalFxZXYQW2Jggj8TdW+enks+Hrlt2mR8l3TbvZ+hi2xVZvDwvFnt8jy6GQuS9pew+IwZNSnv0dZAOX+dovTPUWWZgWOxaFGrgqjiwSKuujhLG6EcPl0UDEbPc0ZhvM5jxNAJ8Q5a3v7qj2dtJ9N+4Sx/FpuHDy0e392W17L2xTqEB0UqkiBP0biHTuuPhMnQ+6itUfqfNeHPA1MKVjgO+qAaZ3+2YqDjMIKgjQjQxPuDqEEliv8TmNOPCwU5LrXtoOOkz52Wv0WwAOUK52g8BgnePd7tP1aC8m8AWvFr68IKBgdngmazZg2IqAA66iYB5ACoJ3l6EFlv4ZMG05HGIIBNwbGJuHEu0XhjGxx7oncdG9TNi1pBMCBlMSPAXG9lna12YDLNSILdRUa6SfxEieO9lBsAqg1pLub8sAf+WmR6FxLRzl3d8AF0bsR2PgNrVx1Y0wSM2omLiSb9bQNffYnsa1gFasJNy1pgxmu68CZPHjPAWO/KxAAIiLQIiICIiAiIgIiICIiAiIgIiICIiAhCIg0jtV8PaOIBfRAp1Ncv8Atk9Iuw9R7Ll20tn4jCvNOsxxA5jfjmItUHUX81+iFE2nsyjiGd3WYHt66g8wdQfJTA/P9F7SJaZCx4yu5gkCRx/zbRbh2q+HdWiTWwxL2amB9IB95otUHUXWnU8RByvGU6A/VPkeB6H5rIlUnSAecK1xzzvBjcp7lpfWNgGg+AE2kjNfhaVU02kOJmxiByjVXOKlzHU3tDgQzu2tO+4jKcxkxAcR0tdBTU6bnOMNHeE79LQOmTLZ65jH3w42sumdiOxwptbVrbzrlrXXIDon0kT1J5WWTsV2OFICrW3n/VkXDbRPHQDW548At3ViAREWgREQEREBERAREQEREBERAREQEREBERAREQEREBax2n7FYfFguAFOqdXAS13428fPVbOiDgu1uz+Iwb8r2EsJ3dXNP4Hcfwm66Z2U7LtYRiKrfpS1oAOoaLieV7x79NuhFMAiIqCIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIgIiICIiAiIg//9k=" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>Fonte de Alimentação:</h4> 
               A fonte de alimentação é simplesmente o objeto responsável por fornecer energia elétrica ao seu computador. Ela converte correntes<br>
        alternadas em correntes contínuas. Ou seja, quando a energia chega às tomadas em 110 V ou 220 V, ela é transformada em tensões de 5 V<br>
        e 12 V. Por ser um equipamento que gera uma energia eletromagnética, a fonte fica separada das demais peças para evitar interferências.<br>
        <br>
        <br>
        <img src="http://s.glbimg.com/po/tt/f/original/2012/12/20/conheca-opcoes-de-placas-de-video-de-acordo-com-seu-perfil-e-bolso.jpg" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>Placa de Video:</h4> 
               A placa de vídeo é responsável por enviar sinais do computador para o monitor, melhorando as imagens. Ela possui memória própria, com sua<br>
        capacidade sempre medida em Bytes. A placa on board, porém, não tem uma memória dedicada, e por isso acaba utilizando a memória RAM. <br>
        Este método deixa o seu sistema mais lento. A capacidade dessa placa é limitada.<br>

               Já as placas off-board geram imagens e efeitos visuais tridimensionais, e aceleram os bidimensionais, aliviando o trabalho do <br>
        processador principal e gerando um resultado final melhor e mais rápido. Em games, por exemplo, quanto melhor a placa, mais definições<br>
        de efeitos serão vistos, e mais rápido o jogo irá rodar. A maioria dos jogos modernos exige placas super potentes.<br>
        <br>
        <br>
        <img src="https://http2.mlstatic.com/D_NQ_NP_903178-MLB29497021018_022019-Q.jpg" alt="Girl in a jacket" style="width:150px;height:150px;"><h4>Gabinete:</h4> 
        O gabinete é a “casa” de todas as peças descritas anteriormente. Também chamado de torre, ele possui diversos modelos, depende da necessidade<br>
        de cada um. Alguns possuem melhor ventilação, fornecem mais espaço, têm um design mais de acordo com o dono etc.   <br>
            </td>
        </tr>
    </table>
    <br>
     
    <table  align="center">  
   <tr>
       <td>
<form method="POST" >
        <a href="mapa.css"></a>
   <iframe 
align="center"
width="500"
heigth="250"
frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCeq5P7v-Nm-AaPau8vlHA50VeTTCjm4qM &q=Brasilia+DF" allowfullscreen>
   </iframe>   
        </td>
           <tr>
    </table>  
<br>  
<table  align="center">  
   <tr>     <td>ID</td>
           <td>NOME </td>
           <td>E-MAIL</td>
           <td>SENHA</td>
           <td>Edi/excluir</td>
   </tr>
           <?php
           do{
               
           ?>    
              
       <tr>
           <td width="100"><?php echo $linha['id']; ?></td>
           <td width="100"><?php echo $linha['nome']; ?></td>
           <td width="100"><?php echo $linha['email']; ?></td>
           <td width="100"><?php echo $linha['senha']; ?></td>
           <td> <a href=" <?php echo "editar.php?id=" . $linha['id'] . "&nome" . $linha['nome'] . "&email" . $linha['email'] . "&senha" . $linha['senha'] ?>">editar</a>
              <a href=" <?php echo "excluir.php?id=" . $linha['id'] . "&nome" . $linha['nome'] . "&email" . $linha['email'] . "&senha" . $linha['senha'] ?>">excluir</a>
       </td>
       </tr>
           <?php } while($linha = $sql_query-> fetch_assoc());?>
   
</table>
      </form>
       
  </body>
  </html>




