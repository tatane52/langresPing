$(document).ready(function() {

    function difference(pointA, pointB) {
        return pointA - pointB;
    }

    $('#calculButton').click(function() {
        var mesPoint = parseInt($('#myPoint').val());
        var pointAdv = parseInt($('#pointAdv').val());
        var selectCoef = parseFloat($('#calculSelect option:selected').val());
        var radioResult = $('input[name=resultat]:checked').val();
        var ecart = 0;
        var diff = difference(mesPoint, pointAdv);
        if (selectCoef == 0.5) {
            if (radioResult == "victoire") {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint + (6.0 * 0.5);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint + (7.0 * 0.5);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint + (8.0 * 0.5);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint + (10.0 * 0.5);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint + (13.0 * 0.5);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint + (17.0 * 0.5);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint + (22.0 * 0.5);
                    } else if (diff <= -400 && diff > -500) {
                        ecart = mesPoint + (28.0 * 0.5);
                    } else if (diff <= -500) {
                        ecart = mesPoint + (40.0 * 0.5);
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint + (6.0 * 0.5);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint + (5.5 * 0.5);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint + (5.0 * 0.5);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint + (4.0 * 0.5);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint + (3.0 * 0.5);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint + (2.0 * 0.5);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint + (1.0 * 0.5);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint + (0.5 * 0.5);
                    } else if (diff >= 500) {
                        ecart = mesPoint + 0.0;
                    }
                }
            } else {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint - (5.0 * 0.5);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint - (4.5 * 0.5);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint - (4.0 * 0.5);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint - (3.0 * 0.5);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint - (2.0 * 0.5);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint - (1.0 * 0.5);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint - (0.5 * 0.5);
                    } else if (diff <= -400) {
                        ecart = mesPoint - 0.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint - (5.0 * 0.5);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint - (6.0 * 0.5);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint - (7.0 * 0.5);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint - (8.0 * 0.5);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint - (10.0 * 0.5);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint - (12.5 * 0.5);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint - (16.0 * 0.5);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint - (20.0 * 0.5);
                    } else if (diff >= 500) {
                        ecart = mesPoint - (29.0 * 0.5);
                    }
                }
            }
        } else if (selectCoef == 0.75) {
            if (radioResult == "victoire") {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint + (6.0 * 0.75);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint + (7.0 * 0.75);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint + (8.0 * 0.75);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint + (10.0 * 0.75);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint + (13.0 * 0.75);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint + (17.0 * 0.75);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint + (22.0 * 0.75);
                    } else if (diff <= -400 && diff > -500) {
                        ecart = mesPoint + (28.0 * 0.75);
                    } else if (diff <= -500) {
                        ecart = mesPoint + (40.0 * 0.75);
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint + (6.0 * 0.75);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint + (5.5 * 0.75);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint + (5.0 * 0.75);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint + (4.0 * 0.75);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint + (3.0 * 0.75);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint + (2.0 * 0.75);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint + (1.0 * 0.75);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint + (0.5 * 0.75);
                    } else if (diff >= 500) {
                        ecart = mesPoint + 0.0;
                    }
                }
            } else {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint - (5.0 * 0.75);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint - (4.5 * 0.75);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint - (4.0 * 0.75);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint - (3.0 * 0.75);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint - (2.0 * 0.75);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint - (1.0 * 0.75);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint - (0.5 * 0.75);
                    } else if (diff <= -400) {
                        ecart = mesPoint - 0.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint - (5.0 * 0.75);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint - (6.0 * 0.75);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint - (7.0 * 0.75);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint - (8.0 * 0.75);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint - (10.0 * 0.75);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint - (12.5 * 0.75);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint - (16.0 * 0.75);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint - (20.0 * 0.75);
                    } else if (diff >= 500) {
                        ecart = mesPoint - (29.0 * 0.75);
                    }
                }
            }
        } else if (selectCoef == 1) {
            if (radioResult == "victoire") {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint + 6.0;
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint + 7.0;
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint + 8.0;
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint + 10.0;
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint + 13.0;
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint + 17.0;
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint + 22.0;
                    } else if (diff <= -400 && diff > -500) {
                        ecart = mesPoint + 28.0;
                    } else if (diff <= -500) {
                        ecart = mesPoint + 40.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint + 6.0;
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint + 5.5;
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint + 5.0;
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint + 4.0;
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint + 3.0;
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint + 2.0;
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint + 1.0;
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint + 0.5;
                    } else if (diff >= 500) {
                        ecart = mesPoint + 0.0;
                    }
                }
            } else {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint - 5.0;
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint - 4.5;
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint - 4.0;
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint - 3.0;
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint - 2.0;
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint - 1.0;
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint - 0.5;
                    } else if (diff <= -400) {
                        ecart = mesPoint - 0.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint - 5.0;
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint - 6.0;
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint - 7.0;
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint - 8.0;
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint - 10.0;
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint - 12.5;
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint - 16.0;
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint - 20.0;
                    } else if (diff >= 500) {
                        ecart = mesPoint - 29.0;
                    }
                }
            }
        } else if (selectCoef == 1.25) {
            if (radioResult == "victoire") {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint + (6.0 * 1.25);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint + (7.0 * 1.25);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint + (8.0 * 1.25);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint + (10.0 * 1.25);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint + (13.0 * 1.25);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint + (17.0 * 1.25);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint + (22.0 * 1.25);
                    } else if (diff <= -400 && diff > -500) {
                        ecart = mesPoint + (28.0 * 1.25);
                    } else if (diff <= -500) {
                        ecart = mesPoint + (40.0 * 1.25);
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint + (6.0 * 1.25);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint + (5.5 * 1.25);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint + (5.0 * 1.25);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint + (4.0 * 1.25);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint + (3.0 * 1.25);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint + (2.0 * 1.25);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint + (1.0 * 1.25);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint + (0.5 * 1.25);
                    } else if (diff >= 500) {
                        ecart = mesPoint + 0.0;
                    }
                }
            } else {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint - (5.0 * 1.25);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint - (4.5 * 1.25);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint - (4.0 * 1.25);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint - (3.0 * 1.25);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint - (2.0 * 1.25);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint - (1.0 * 1.25);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint - (0.5 * 1.25);
                    } else if (diff <= -400) {
                        ecart = mesPoint - 0.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint - (5.0 * 1.25);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint - (6.0 * 1.25);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint - (7.0 * 1.25);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint - (8.0 * 1.25);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint - (10.0 * 1.25);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint - (12.5 * 1.25);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint - (16.0 * 1.25);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint - (20.0 * 1.25);
                    } else if (diff >= 500) {
                        ecart = mesPoint - (29.0 * 1.25);
                    }
                }
            }
        } else {
            if (radioResult == "victoire") {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint + (6.0 * 1.5);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint + (7.0 * 1.5);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint + (8.0 * 1.5);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint + (10.0 * 1.5);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint + (13.0 * 1.5);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint + (17.0 * 1.5);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint + (22.0 * 1.5);
                    } else if (diff <= -400 && diff > -500) {
                        ecart = mesPoint + (28.0 * 1.5);
                    } else if (diff <= -500) {
                        ecart = mesPoint + (40.0 * 1.5);
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint + (6.0 * 1.5);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint + (5.5 * 1.5);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint + (5.0 * 1.5);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint + (4.0 * 1.5);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint + (3.0 * 1.5);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint + (2.0 * 1.5);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint + (1.0 * 1.5);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint + (0.5 * 1.5);
                    } else if (diff >= 500) {
                        ecart = mesPoint + 0.0;
                    }
                }
            } else {
                if (mesPoint < pointAdv) {
                    if (diff <= 0 && diff > -25) {
                        ecart = mesPoint - (5.0 * 1.5);
                    } else if (diff <= -25 && diff > -50) {
                        ecart = mesPoint - (4.5 * 1.5);
                    } else if (diff <= -50 && diff > -100) {
                        ecart = mesPoint - (4.0 * 1.5);
                    } else if (diff <= -100 && diff > -150) {
                        ecart = mesPoint - (3.0 * 1.5);
                    } else if (diff <= -150 && diff > -200) {
                        ecart = mesPoint - (2.0 * 1.5);
                    } else if (diff <= -200 && diff > -300) {
                        ecart = mesPoint - (1.0 * 1.5);
                    } else if (diff <= -300 && diff > -400) {
                        ecart = mesPoint - (0.5 * 1.5);
                    } else if (diff <= -400) {
                        ecart = mesPoint - 0.0;
                    }
                } else {
                    if (diff >= 0 && diff < 25) {
                        ecart = mesPoint - (5.0 * 1.5);
                    } else if (diff >= 25 && diff < 50) {
                        ecart = mesPoint - (6.0 * 1.5);
                    } else if (diff >= 50 && diff < 100) {
                        ecart = mesPoint - (7.0 * 1.5);
                    } else if (diff >= 100 && diff < 150) {
                        ecart = mesPoint - (8.0 * 1.5);
                    } else if (diff >= 150 && diff < 200) {
                        ecart = mesPoint - (10.0 * 1.5);
                    } else if (diff >= 200 && diff < 300) {
                        ecart = mesPoint - (12.5 * 1.5);
                    } else if (diff >= 300 && diff < 400) {
                        ecart = mesPoint - (16.0 * 1.5);
                    } else if (diff >= 400 && diff < 500) {
                        ecart = mesPoint - (20.0 * 1.5);
                    } else if (diff >= 500) {
                        ecart = mesPoint - (29.0 * 1.5);
                    }
                }
            }
        }
        $("#resultFinal").val(ecart);
    })
})