<!DOCTYPE html>
<html>
<body>
<div lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTH-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
    <title>DOCUMENT</title>
    <link rel="stylesheet" type="text/css" href="style.css"
</head>

<div class="header">
    <div class="container">
        <h1>Monty Hall problem  - 3 Doors Paradox</h1>

    </div>
    <p>Suppose you're on a game show, and you're given the choice of three doors: Behind one door is a car; behind the others, goats. You pick a door, say No. 1, and the host, who knows what's behind the doors, opens another door, say No. 3, which has a goat. He then says to you, "Do you want to pick door No. 2?" Is it to your advantage to switch your choice?</p>
    <p>Vos Savant's response was that the contestant should switch to the other door (vos Savant 1990a). Under the standard assumptions, contestants who switch have a 2/3 (66,66%)
        chance of winning the car, while contestants who stick to their initial choice have only a 1/3 (33.33%) chance. The given probabilities depend on specific assumptions about how the host and contestant choose their doors. A key insight is that, under these standard conditions, there is more information about doors 2 and 3 that was not available at the beginning of the game, when door 1 was chosen by the player: the host's deliberate action adds value to the door he did not choose to eliminate, but not to the one chosen by the contestant originally. Another insight is that switching doors is a different action than choosing between the two remaining doors at random, as the first action uses the previous information and the latter does not. Other possible behaviors than the one described can reveal different additional information, or none at all, and yield different probabilities.
        Many readers of vos Savant's column refused to believe switching is beneficial despite her explanation. After the problem appeared in Parade, approximately 10,000 readers, including nearly 1,000 with PhDs, wrote to the magazine, most of them claiming vos Savant was wrong (Tierney 1991). Even when given explanations, simulations, and formal mathematical proofs, many people still do not accept that switching is the best strategy (vos Savant 1991a). Paul Erdős, one of the most prolific mathematicians in history, remained unconvinced until he was shown a computer simulation demonstrating the predicted result (Vazsonyi 1999).

        The problem is a paradox of the veridical type, because the correct choice (that one should switch doors) is so counterintuitive it can seem absurd, but is nevertheless demonstrably true.</p>
    <div class="image">
        <a href="index.php"><img src="images/monty-hall-2.jpg"></a>
    </div>
    <p style="font-size: 30px">You can simulate how many times you want!</p>
</div>

    <div class="form">
        <p>Number of tries:</p>
        <form action="index1.php" method="POST">
            <br>
            <input  type="text" name="number" placeholder="number of tries">
            <br><br>
            <input  type="submit" value="TRY!">
        </form>
    </div>


</body>
</html>

