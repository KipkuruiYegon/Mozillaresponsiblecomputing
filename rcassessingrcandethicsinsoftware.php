<?php
// index.php or other_php_files.php

// Include the header.php file
include 'partials/header.php';
?>

<div class="grain container-fluid">
    <div class="container mt-5 mb-5">
        <p class="fw-bold  mb-5 border-bottom mt-5">Home | Blog | Article | Nov 2023</p>

        <div class="row col-12 d-flex justify-content-center align-items-center mb-5">
            <div class="col-md-9">
                <img src="assets/images/blog6.jpg" class="img-fluid" style="object-fit: cover; width: 100%; height: 200px;">
            </div>

            <div class="col-md-9">

                <p class="mt-3">Nov 2023 | By Hellen Mwangi</p>
                <h2 class="mt-1 fw-bold" style="">Assessing Responsible Computing & Ethics compliance in softwares</h2>

                <p>
                    <strong>Question:</strong>
                    How do we determine if a software developed has met the ethical principles?
                </p>


                <p>The rapid development of new technologies has raised a number of ethical concerns,
                    such as the potential for these technologies to be used for malicious purposes, to
                    violate privacy, or to create social divides. In order to address these concerns, it is
                    important to develop responsible computing practices that ensure that technology is
                    used in a way that is beneficial to society.
                </p>
                <p>One way to promote responsible computing is to develop tools/guidelines that can
                    help(can be used by) developers assess the ethical implications of their software. Such
                    a tool/guideline could be used to identify potential ethical issues, to evaluate the
                    potential impact of the software on users and society, and to make recommendations
                    for how to mitigate any risks.
                </p>
                <p>To respond to the foregoing need, a team from Dedan Kimathi University of
                    Technology, through the Responsible Computing (RC) Challenge, has reviewed
                    several existing research works designed and adapted a tool/guideline for assessing
                    ethics principles in software at different stages of development, from the early design
                    phase to the final release, being informed by the works of Olga Levina (2023). The
                    tool is based on a set of ethical principles under Autonomy, Harm, Benefit, and
                    Justice.
                </p>

                <p>The adapted tool has been contextually developed using a participatory approach,
                    with input from a variety of stakeholders, including developers, users, ethicists, and
                    policymakers. This has ensured that the tool is relevant to the needs of different
                    stakeholders and that it is effective in identifying and addressing ethical issues.
                </p>
                <p>ESAT, or Ethical Software Assessment Tool is based on a study of values that are
                    now taken into account in computing research, practice, and legal proceedings. There
                    is an outline and discussion of the ethical framework and values operationalized in
                    ESAT by Olga Levina (2023)

                    <a target="_blank" href="https://www.researchgate.net/profile/Olga-Levina-2/publication/370766004_Operationalizing_Ethics_for_Information_Systems_Design-A_Tool_for_Ethical_Software/links/64620d1afbaf5b27a4cb3794/Operationalizing-Ethics-for-Information-Systems-Design-A-Tool-for-Ethical-Software.pdf">
                        (https://www.researchgate.net/profile/Olga-Levina-2/publication/370766004_Operationalizing_Ethics_for_Information_Systems_Design-A_Tool_for_Ethical_Software/links/64620d1afbaf5b27a4cb3794/Operationalizing-Ethics-for-Information-Systems-Design-A-Tool-for-Ethical-Software.pdf)</a>
                    Since the assessment is led by operationalized ethical values, ethical expertise or
                    primary issue analysis are not necessary. It relies on an applied ethics approach that
                    considers a moral dimension to real world issues. The ESAT framework’s
                    values/principles are:
                </p>




                <p>
                    Transparency: Transparency in Responsible Computing refers to the clear and open communication
                    of how technologies work and how data is used. It involves making information about algorithms,
                    data collection, and decision-making processes readily available to users and stakeholders.


                </p>
                <p>
                    Explainability: Explainability is the concept that complex algorithms and automated
                    decision-making processes should be interpretable and understandable to non-experts.
                </p>
                <p>
                    Accessibility: Accessibility in Responsible Computing emphasizes that technology
                    should be designed to accommodate the diverse needs of all users, regardless of their
                    physical or cognitive abilities. This principle advocates for creating digital
                    environments, applications, and services that are usable and navigable by everyone.
                    This includes designing user interfaces with inclusive features, such as screen readers
                    for the visually impaired.
                </p>

                <p>
                    Changeability: Technologies and systems should be designed with the capacity to
                    evolve, improve, and incorporate feedback from users and stakeholders.</p>

                <p>
                    Privacy: It involves safeguarding individuals&#39; personal information and ensuring that
                    data is collected and used only with explicit consent and for legitimate purposes
                </p>

                <p>
                    <strong>Harm and benefits</strong>
                    <br>
                    This value evaluates a software feature that could have negative consequences for the
                    user or other stakeholders. The following are sub components that constitute harm and
                    benefits: Security, safety, impact on pertinent systems, accuracy/reliability, health and
                    wellbeing.
                </p>

                <p>Security: Security in Responsible Computing centers on safeguarding data, systems,
                    and networks from unauthorized access, breaches, and cyber threats. It obliges
                    developers and users to employ encryption, authentication mechanisms, and robust
                    cybersecurity practices. Ethical security practices promote trust and protect sensitive
                    information from malicious actors.
                </p>



                <p>Safety: pertains to the physical and psychological wellbeing of individuals when
                    interacting with technology. This includes ensuring that autonomous systems, such as
                    self-driving cars or medical devices, are designed to minimize harm and prioritize
                    human safety. Ethical considerations necessitate rigorous testing and fail-safes to
                    prevent accidents and injuries.
                </p>

                <p>Accuracy/Reliability: entails providing reliable and truthful information in computing
                    systems. Computing systems and software should be dependable and predictable to
                    minimize downtime. Algorithms, AI models, and data must be free from biases and
                    errors. Ethical accuracy is crucial to prevent discrimination, misinformation, and
                    unfair decision-making that may disproportionately impact marginalized groups.</p>

                <p>Impact: Ethical computing considers the broader societal and environmental impact of
                    technology. Developers and organizations must assess and mitigate negative
                    consequences, such as job displacement due to automation or the environmental
                    footprint of data centers. Promoting a positive impact involves aligning technology
                    with social good and sustainability.</p>

                <p>Efficiency encompasses optimizing the use of computational resources to minimize
                    waste and energy consumption. Ethical efficiency not only reduces environmental
                    impact but also ensures fair access to resources in a world where digital divides
                    persist.
                </p>
                <p>Health and Wellbeing: Responsible Computing acknowledges the influence of
                    technology on mental and physical health. It emphasizes the importance of designing
                    technologies that promote user wellbeing, minimize addiction and screen time, and
                    protect privacy. Developers should be mindful of the potential negative impacts of
                    social media, gaming, and other digital platforms on mental health.
                </p>
                <p>
                    <strong>Justice</strong>
                    <br>
                    Assess if the software has a system for appeals. For example if there exists unfair
                    distribution of the system’s benefits or if the system causes harm to the users or
                    stakeholder, we need to ask this question? “Who’s responsible?” How do we appeal?.
                    Therefore, justice components include but are not limited to: Distribution of burden
                    and benefit, equality/non-discrimination, protecting the vulnerable, accountability,
                    and contestability.
                </p>

                <p>Distribution of Burden and Benefit: This principle underscores the importance of
                    ensuring that the positive and negative consequences of technological advancements
                    are distributed equitably among all stakeholders. It calls for a fair allocation of the
                    benefits, such as increased convenience or efficiency, as well as the burdens, which
                    may include privacy infringements or job displacement. Computing professionals
                    must strive to minimize disparities in how technology impacts various social,
                    economic, and demographic groups.
                </p>

                <p>Equality/Non-Discrimination: In Responsible Computing, the principle of equality
                    emphasizes the need to design and deploy technology in a manner that promotes
                    fairness and non-discrimination. This means that algorithms, systems, and
                    applications should not reinforce biases or discriminate against individuals based on
                    factors like race, gender, ethnicity, or socioeconomic status. Ethical computing
                    practices prioritize inclusivity and work to eliminate bias and prejudice from
                    technological systems.
                </p>

                <p>Protecting the Vulnerable: Responsible Computing recognizes that certain individuals
                    or groups may be more susceptible to the negative consequences of technology, either
                    due to limited access, knowledge, or resources. Protecting the vulnerable means
                    taking extra care to safeguard their interests and well-being. This might involve
                    creating user-friendly interfaces, providing additional support for those with
                    disabilities, or ensuring that data privacy measures protect the most vulnerable from
                    exploitation.
                </p>

                <p>Accountability: Accountability is a fundamental principle in Responsible Computing,
                    requiring individuals and organizations to take responsibility for the consequences of
                    their technological actions. This includes acknowledging mistakes, rectifying harm,
                    and implementing mechanisms for oversight and transparency. It&#39;s essential to hold
                    developers, companies, and institutions accountable for the ethical implications of
                    their software, products, and services.
                </p>

                <p>Contestability: In the dynamic field of computing, differing opinions and values often
                    shape the development and deployment of technology. The principle of contestability
                    encourages open dialogue and debate about the ethical considerations surrounding
                    computing. It calls for an environment where individuals can question, challenge, and
                    contest the decisions and actions of technology developers and decision-makers.
                    Robust discussions on ethics can lead to better-informed choices and more ethical
                    outcomes.
                </p>

                <p>The development of this tool makes an important contribution to the promotion of
                    responsible computing by providing developers with a valuable resource for assessing
                    the ethical implications of their software, and it helps to ensure that technology is
                    used in a way that positively impacts the society.
                </p>

                <p>
                    <strong>Question:</strong>Can organizations take up a Self-Assessment using the ESAT tool?
                </p>
                <p>
                    The Responsible Computing Self-Assessment is a systemic approach to the
                    Responsible Computing challenge and a unique way to address the broad spectrum of
                    areas to be considered. In particular, across four principles: Autonomy, Harm,
                    Benefits, and Justice. The self-assessment may assess an organization’s compliance
                    for ethical practices when procuring or developing softwares. Technology vendors
                    can use the assessment internally or as a customer-facing assessment to establish a
                    client’s needs.
                </p>
                <p>The aim of conducting a self assessment is to:
                <ol>
                    <li>Create awareness about Responsible Computing (RC) by asking questions and providing answers.</li>
                    <li>Companies/organizations will understand their RC status and next steps to undertake in a Responsible Computing endeavor.</li>
                    <li>Provide specific recommendations and guidance to organizations in RC journey.</li>
                    <li>To establish a framework for the development of future, more specific, and in-depth versions of the assessment tool.</li>
                </ol>

                <p>
                    The tool is available here
                    <a href="https://ee.kobotoolbox.org/x/xJoRGDpP" target="_blank">https://ee.kobotoolbox.org/x/xJoRGDpP</a>
                </p>
                <p>
                    We encourage everyone to test it by using it to evaluate any software/applications
                    they come across and may provide feedback on its appropriateness or any suggestions
                    to enhance the tool.
                </p>

                <strong>DeKUT RC Project | (Send feedback to rc@dkut.ac.ke)</strong>
            </div>

        </div>

    </div>




</div>





<?php
// index.php or other_php_files.php

// Include the footer.php file
include 'partials/footer.php';
?>