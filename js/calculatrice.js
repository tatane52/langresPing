$(document).ready(function() {



    $('#calculButton').click(function() {
            var mesPoint = parseInt($('#myPoint').val());
            var pointAdv = parseInt($('#pointAdv').val());
            var selectCoef = parseInt($('#calculSelect option:selected').val());
            var radioResult = console.log($('input[name=resultat]:checked').val());

            var diff = difference(mesPoint, pointAdv);
            if (selectCoef == 0.5) {
                if (victoire) {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points + (6.0 * 0.5);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points + (7.0 * 0.5);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points + (8.0 * 0.5);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points + (10.0 * 0.5);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points + (13.0 * 0.5);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points + (17.0 * 0.5);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points + (22.0 * 0.5);
                        } else if (difference <= -400 && difference > -500) {
                            ecart = points + (28.0 * 0.5);
                        } else if (difference <= -500) {
                            ecart = points + (40.0 * 0.5);
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points + (6.0 * 0.5);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points + (5.5 * 0.5);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points + (5.0 * 0.5);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points + (4.0 * 0.5);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points + (3.0 * 0.5);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points + (2.0 * 0.5);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points + (1.0 * 0.5);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points + (0.5 * 0.5);
                        } else if (difference >= 500) {
                            ecart = points + 0.0;
                        }
                    }
                } else {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points - (5.0 * 0.5);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points - (4.5 * 0.5);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points - (4.0 * 0.5);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points - (3.0 * 0.5);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points - (2.0 * 0.5);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points - (1.0 * 0.5);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points - (0.5 * 0.5);
                        } else if (difference <= -400) {
                            ecart = points - 0.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points - (5.0 * 0.5);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points - (6.0 * 0.5);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points - (7.0 * 0.5);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points - (8.0 * 0.5);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points - (10.0 * 0.5);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points - (12.5 * 0.5);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points - (16.0 * 0.5);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points - (20.0 * 0.5);
                        } else if (difference >= 500) {
                            ecart = points - (29.0 * 0.5);
                        }
                    }
                }
            } else if (coeff == 1) {
                if (victoire) {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points + (6.0 * 0.75);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points + (7.0 * 0.75);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points + (8.0 * 0.75);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points + (10.0 * 0.75);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points + (13.0 * 0.75);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points + (17.0 * 0.75);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points + (22.0 * 0.75);
                        } else if (difference <= -400 && difference > -500) {
                            ecart = points + (28.0 * 0.75);
                        } else if (difference <= -500) {
                            ecart = points + (40.0 * 0.75);
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points + (6.0 * 0.75);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points + (5.5 * 0.75);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points + (5.0 * 0.75);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points + (4.0 * 0.75);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points + (3.0 * 0.75);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points + (2.0 * 0.75);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points + (1.0 * 0.75);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points + (0.5 * 0.75);
                        } else if (difference >= 500) {
                            ecart = points + 0.0;
                        }
                    }
                } else {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points - (5.0 * 0.75);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points - (4.5 * 0.75);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points - (4.0 * 0.75);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points - (3.0 * 0.75);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points - (2.0 * 0.75);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points - (1.0 * 0.75);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points - (0.5 * 0.75);
                        } else if (difference <= -400) {
                            ecart = points - 0.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points - (5.0 * 0.75);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points - (6.0 * 0.75);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points - (7.0 * 0.75);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points - (8.0 * 0.75);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points - (10.0 * 0.75);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points - (12.5 * 0.75);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points - (16.0 * 0.75);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points - (20.0 * 0.75);
                        } else if (difference >= 500) {
                            ecart = points - (29.0 * 0.75);
                        }
                    }
                }
            } else if (coeff == 2) {
                if (victoire) {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points + 6.0;
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points + 7.0;
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points + 8.0;
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points + 10.0;
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points + 13.0;
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points + 17.0;
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points + 22.0;
                        } else if (difference <= -400 && difference > -500) {
                            ecart = points + 28.0;
                        } else if (difference <= -500) {
                            ecart = points + 40.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points + 6.0;
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points + 5.5;
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points + 5.0;
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points + 4.0;
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points + 3.0;
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points + 2.0;
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points + 1.0;
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points + 0.5;
                        } else if (difference >= 500) {
                            ecart = points + 0.0;
                        }
                    }
                } else {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points - 5.0;
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points - 4.5;
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points - 4.0;
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points - 3.0;
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points - 2.0;
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points - 1.0;
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points - 0.5;
                        } else if (difference <= -400) {
                            ecart = points - 0.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points - 5.0;
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points - 6.0;
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points - 7.0;
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points - 8.0;
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points - 10.0;
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points - 12.5;
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points - 16.0;
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points - 20.0;
                        } else if (difference >= 500) {
                            ecart = points - 29.0;
                        }
                    }
                }
            } else if (coeff == 3) {
                if (victoire) {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points + (6.0 * 1.25);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points + (7.0 * 1.25);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points + (8.0 * 1.25);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points + (10.0 * 1.25);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points + (13.0 * 1.25);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points + (17.0 * 1.25);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points + (22.0 * 1.25);
                        } else if (difference <= -400 && difference > -500) {
                            ecart = points + (28.0 * 1.25);
                        } else if (difference <= -500) {
                            ecart = points + (40.0 * 1.25);
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points + (6.0 * 1.25);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points + (5.5 * 1.25);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points + (5.0 * 1.25);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points + (4.0 * 1.25);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points + (3.0 * 1.25);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points + (2.0 * 1.25);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points + (1.0 * 1.25);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points + (0.5 * 1.25);
                        } else if (difference >= 500) {
                            ecart = points + 0.0;
                        }
                    }
                } else {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points - (5.0 * 1.25);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points - (4.5 * 1.25);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points - (4.0 * 1.25);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points - (3.0 * 1.25);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points - (2.0 * 1.25);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points - (1.0 * 1.25);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points - (0.5 * 1.25);
                        } else if (difference <= -400) {
                            ecart = points - 0.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points - (5.0 * 1.25);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points - (6.0 * 1.25);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points - (7.0 * 1.25);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points - (8.0 * 1.25);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points - (10.0 * 1.25);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points - (12.5 * 1.25);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points - (16.0 * 1.25);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points - (20.0 * 1.25);
                        } else if (difference >= 500) {
                            ecart = points - (29.0 * 1.25);
                        }
                    }
                }
            } else {
                if (victoire) {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points + (6.0 * 1.5);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points + (7.0 * 1.5);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points + (8.0 * 1.5);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points + (10.0 * 1.5);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points + (13.0 * 1.5);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points + (17.0 * 1.5);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points + (22.0 * 1.5);
                        } else if (difference <= -400 && difference > -500) {
                            ecart = points + (28.0 * 1.5);
                        } else if (difference <= -500) {
                            ecart = points + (40.0 * 1.5);
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points + (6.0 * 1.5);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points + (5.5 * 1.5);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points + (5.0 * 1.5);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points + (4.0 * 1.5);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points + (3.0 * 1.5);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points + (2.0 * 1.5);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points + (1.0 * 1.5);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points + (0.5 * 1.5);
                        } else if (difference >= 500) {
                            ecart = points + 0.0;
                        }
                    }
                } else {
                    if (points < pointsAdv) {
                        if (difference <= 0 && difference > -25) {
                            ecart = points - (5.0 * 1.5);
                        } else if (difference <= -25 && difference > -50) {
                            ecart = points - (4.5 * 1.5);
                        } else if (difference <= -50 && difference > -100) {
                            ecart = points - (4.0 * 1.5);
                        } else if (difference <= -100 && difference > -150) {
                            ecart = points - (3.0 * 1.5);
                        } else if (difference <= -150 && difference > -200) {
                            ecart = points - (2.0 * 1.5);
                        } else if (difference <= -200 && difference > -300) {
                            ecart = points - (1.0 * 1.5);
                        } else if (difference <= -300 && difference > -400) {
                            ecart = points - (0.5 * 1.5);
                        } else if (difference <= -400) {
                            ecart = points - 0.0;
                        }
                    } else {
                        if (difference >= 0 && difference < 25) {
                            ecart = points - (5.0 * 1.5);
                        } else if (difference >= 25 && difference < 50) {
                            ecart = points - (6.0 * 1.5);
                        } else if (difference >= 50 && difference < 100) {
                            ecart = points - (7.0 * 1.5);
                        } else if (difference >= 100 && difference < 150) {
                            ecart = points - (8.0 * 1.5);
                        } else if (difference >= 150 && difference < 200) {
                            ecart = points - (10.0 * 1.5);
                        } else if (difference >= 200 && difference < 300) {
                            ecart = points - (12.5 * 1.5);
                        } else if (difference >= 300 && difference < 400) {
                            ecart = points - (16.0 * 1.5);
                        } else if (difference >= 400 && difference < 500) {
                            ecart = points - (20.0 * 1.5);
                        } else if (difference >= 500) {
                            ecart = points - (29.0 * 1.5);
                        }
                    }
                }
            }
            return ecart;
        }


    })

function difference(pointA, pointB) {
    console.log(pointA - pointB);
    return pointA - pointB;
}

})