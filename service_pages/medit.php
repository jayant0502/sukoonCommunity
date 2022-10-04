<?php include '../Controller/autoController.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meditation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <link rel="stylesheet" href="service_pages/Pstyle.css">
  <link rel="stylesheet" href="Style/NavBar.css">
  <link rel="stylesheet" href="profile/style.css">
</head>

<body>
  <header class="justify-content-around">
    <span class="container"><a class="navbar-brand" href="home">Sukoon</a></span>
    <div class="menu">
      <ul class="d-flex m-3 align-items-center">

        <li>
          <!-- Default dropend button -->
          <div class="btn-group ">
            <?php if (isset($_SESSION['id'])) { ?>
              <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo  ucfirst($_SESSION['username']); ?>
              </button><?php } else { ?>
              <a href="login"><button class="btn btn-light">
                  <?php echo  "LogIn/Register"; ?>
                </button></a> <?php } ?>
            <ul class="dropdown-menu position-absolute btn-light">
              <li><a class="dropdown-item" href="MyProfile" target="_self"><i class="fas fa-id-badge icons"></i>MY PROFILE</a></li>
              <li>
                <form method="post"><button type="submit" class="dropdown-item" name="logout"><i class="fas fa-sign-out-alt  icons"></i>Logout</a></form>
              </li>
            </ul>
          </div>
        </li>
        <!-- <li><a href="user/login.php" id="login_reg">Login & Register</a></li> -->
      </ul>

    </div>
  </header>
  <div class="cont">
    <div class="left-panel">
      <h1>7 benefits of meditation, and how it can affect your brain</h1>
      <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">1. Better focus and concentration</h5>
              <p class="card-text"> Mindfulness
 meditation helps you focus on the present, which can improve your concentration on other tasks in daily life. 

A 2011 study from the Harvard Medical School examined the effects of mindfulness meditation on the brain and found a connection between mindfulness and processing new information.  

The researchers examined the brains of 17 people before and after participating in an eight-week meditation program. Brain scans showed an increase in gray matter in the parts of the brain responsible for learning, memory, and emotional regulation. 

Additionally, a 2016 study from researchers at Carnegie Mellon University demonstrated how mindfulness meditation can improve concentration and decision making. 

The study consisted of 35 unemployed adults looking for work. One group participated in a three-day relaxation program without mindfulness meditation components, while the other group participated in three days of mindfulness meditation. Brain scans before and after showed an increase in connectivity among parts of the brain that control attention for the meditation group. 

"Research shows we can actually train our attention and our meta-awareness, and that this is a learnable skill," says Richard Davidson, PhD, a professor of psychology and psychiatry at the University of Wisconsin-Madison and founder of the Center for Healthy Minds.</p>
              <h5 class="card-title">2. Improve self-esteem and self-awareness</h5>
              <p class="card-text"> Mindfulness meditation encourages you to slow down, allows for deeper self-reflection, and can help you discover positive attributes about yourself. 

"Mindfulness helps increase self-awareness by increasing the ability to examine one's thoughts and feelings without judgment, which ends up improving self-esteem," says Brian Wind, PhD, Chief Clinical Officer at JourneyPure. 

According to researchers at Stanford University, mindfulness meditation can especially help those with social anxiety. In a 2009 study published in the Journal of Cognitive Psychotherapy, 14 participants with social anxiety disorder participated in two months of meditation training and reported decreased anxiety and improved self-esteem after completing the program.</p>
              <h5 class="card-title">3. Reduce stress</h5>
              <p class="card-text"> Mindfulness meditation can also lower the levels of cortisol — the stress hormone —which helps you feel more relaxed. 

In a 2013 review, researchers analyzed more than 200 studies of mindfulness meditation among healthy people and found meditation to be an effective way to reduce stress. 

Repeating a mantra — such as a word or phrase — during meditation can also have a calming effect, and by concentrating on your mantra, you're able to shift your focus away from distracting thoughts. 

Transcendental meditation has a similar effect, in which you silently repeat a word or sound to keep yourself focused, and as a result you're able to reach a state of complete stillness and stability, says David Foley, founder of Unify Cosmos, a meditation center in Oklahoma. 

For example, a 2019 study showed a reduction in psychological distress among teachers and support staff who participated in a transcendental meditation program. 

Researchers used stress scales before and after the program to measure the participants' levels of burnout, depression, and stress. After receiving a seven-step transcendental meditation course, participants practiced meditation twice a day for 15 to 20 minutes over the course of four months and reported lower levels of stress and burnout than before learning the techniques. </p>
              <h5 class="card-title">4. Manage anxiety or depression</h5>
              <p class="card-text"> Mindfulness meditation helps train your mind to focus on the present, making you less likely to ruminate on anxious thoughts that can fuel depression. 

A 2014 research analysis published in JAMA Internal Medicine found that mindful meditation can help ease anxiety and depression, and could be part of a comprehensive mental health treatment plan. 

Research has also supported the benefits of mindfulness-based stress reduction (MBSR) — a therapy program that incorporates mindfulness meditation. Studies have found that MBSR can help those with anxiety calm their minds and reduce symptoms of depression, including trouble sleeping, loss of appetite, and low mood.</p>
              <h5 class="card-title">5. Fight addiction </h5>
              <p class="card-text"> Meditation can alter the brain receptors associated with drug and alcohol addiction, which may reduce cravings for these substances, Davidson says. Additionally, mindfulness meditation can increase your awareness of cravings and allow you to better manage them.

"That awareness is really powerful because it can allow us to ride the urge or the craving… without getting overcome by it," Davidson says. "We can notice the urge, notice that it's there, but we don't have to give into it."

A 2018 study published in Substance Abuse and Rehabilitation found that mindfulness training can help prevent future relapses for people with a substance use disorder, as it produces a therapeutic effect that helps regulate how the brain experiences pleasure. </p>
              <h5 class="card-title">6. Control pain</h5>
              <p class="card-text"> Many doctors recommend mindful meditation practices as part of a comprehensive pain management plan, Davidson says. 

For example, a 2020 study of more than 6,400 participants across 60 trials found that meditation could reduce pain in those who suffered from post-surgical, acute, or chronic pain.

It's not going to be a cure all for everything and it won't necessarily make the pain go away," Davidson says. "We can recognize that the pain is there, but we don't get ensnared by it in the same way, and that can be enormously beneficial in helping us cope with chronic pain."</p>
              <h5 class="card-title">7. Make you more kind or loving</h5>
              <p class="card-text"> Loving kindness meditation can foster compassion for yourself and others. It strengthens circuits in the brain that pick up on other people's emotions, promotes altruistic behavior, and decreases the implicit or unconscious bias responsible for perpetuating harmful stereotypes.

To start a loving kindness meditation, you might envision a loved one in your mind and wish them happiness. You can then extend that love to yourself and other people in your life. 

"You can use a simple phrase that you silently repeat to yourself, like 'may you enjoy happiness' as you hold that person in your mind," Davidson says. </p>
            </div>
          </div>
        </div>
      <h1>5 tips for BEFORE your meditation</h1>
      <div class="row row-cols-1 row-cols-1    g-2">
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">1. Start early.</h5>
              <p class="card-text"> Try to meditate first thing in the morning. That way you can be sure that it actually gets done and not bumped off the to-do list as the day gets more hectic. Plus, morning meditation can be a nice way to start the day — you’re refreshed, awake, and on track for a mindful day.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">2. Same time, same place.</h5>
              <p class="card-text">If you can’t meditate in the morning, try to make a commitment to meditating at the same time and in the same place every day. Making your practice a regular part of your normal daily routine is key to developing a lasting habit.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">3. Get creative about location.</h5>
              <p class="card-text">Yes, it’s recommended that your regular meditation practice happens in the same place every day for consistency. But sometimes that simply isn’t possible. The great thing about meditation is that it can be practiced anywhere — at home, at work, in a park, even walking in a busy airport. It doesn’t matter where it happens, as long as you can find stillness and not be disturbed.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">4. Don’t sit cross-legged (if you don’t think it’s comfortable).</h5>
              <p class="card-text">Forget the stereotypical images of people sitting cross-legged to meditate; for most people, that position can be uncomfortable — and distracting. What’s most important is to find the meditation position that’s most comfortable for you (and if that just so happens to be sitting cross-legged, then of course that’s perfectly fine).</p>
              </div>
           </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">5. Find the best position for you.</h5>
              <p class="card-text">There are four meditation positions that we find work most optimally. You don’t need to force yourself to sit up too straight. If you’re too upright, your mind will be too uptight. The ideal meditating position for most people is somewhere in between: sitting in a chair or on a sofa or couch, arms and legs uncrossed, feet flat on the floor, a cushion or rolled up towel underneath the backside, so that the back is naturally upright.</p>
              </div>
           </div>
        </div>
        <h1>3 tips for DURING meditation</h1>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">1. Breathe naturally.</h5>
              <p class="card-text">Meditation does involve focusing on the breath and using it as an anchor for the mind, but try not to think about the breath or alter it in any way. Simply allow things to unfold naturally, noticing the rising and falling sensation it creates in the body.</p>
              </div>
           </div>
         </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">2. Get comfortable with discomfort.</h5>
              <p class="card-text">People who are new to meditation — and even people who have been doing it for years — often experience negative emotions like anxiety, restlessness, and irritation while practicing. Rather than trying to resist these emotions, give them your full attention and allow them to come and go. Over time the mind learns to recognize these emotions but gets used to not getting caught up in negative patterns of thought — a skill that can be enormously beneficial not only during meditation but also in daily life.</p>
              </div>
           </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">3. Take mindfulness with you.</h5>
              <p class="card-text">Before you finish meditating and go about your day, form a clear idea of what you are going to do next — maybe you’ll shower, or make breakfast, or drive the kids to school. Whatever the activity, try to carry the mindfulness you cultivated during your meditation with you into the next task and throughout the rest of your day.</p>
              </div>
           </div>
        </div>
        <div class="col">
          <div class="card">
              <div class="card-body">
              <h5 class="card-title">5. Find the best position for you.</h5>
              <p class="card-text">There are four meditation positions that we find work most optimally. You don’t need to force yourself to sit up too straight. If you’re too upright, your mind will be too uptight. The ideal meditating position for most people is somewhere in between: sitting in a chair or on a sofa or couch, arms and legs uncrossed, feet flat on the floor, a cushion or rolled up towel underneath the backside, so that the back is naturally upright.</p>
              </div>
           </div>
        </div>
      </div>
    </div>
    <div class="right-panel">
      <div class="card mb-4">
        <div class="card-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/inpok4MKVLM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/wruCWicGBA4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/aIIEI33EUqI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/U9YKY7fdwyg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/KQOAVZew5l8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="card mb-4">
        <div class="card-body">
          <iframe width="100%" height="315" src="https://www.youtube.com/embed/tTHIt3LjW9M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/7e1cb02531.js"></script>
</body>

</html>