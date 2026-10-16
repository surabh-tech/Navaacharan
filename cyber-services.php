<?php
/**
 * Cybersecurity services — single source for cybersecurity.php (cards + detail
 * blocks), services.php (summary cards) and contact.php (service dropdown).
 * Plain text: escape with htmlspecialchars() when echoing.
 *   slug     — anchor id on cybersecurity.php, ?service= value on contact.php
 *   short    — label in the contact-form dropdown
 *   line     — one-line card description
 *   tagline, body, includes — detail block on cybersecurity.php
 *   cta      — optional enquiry link on the detail block
 */
return [
  [
    'slug'     => 'vapt',
    'title'    => 'Vulnerability Assessment & Penetration Testing (VAPT)',
    'short'    => 'VAPT',
    'line'     => 'Find and safely exploit weaknesses across web, mobile, API, network and cloud.',
    'tagline'  => 'Find it before they do.',
    'body'     => 'Our VAPT combines broad vulnerability discovery with targeted, manual exploitation to show what an attacker could really achieve. Every finding is verified, risk-rated and paired with a clear fix.',
    'includes' => [
      'Web application and API testing (OWASP Top 10, OWASP API Top 10)',
      'Mobile application testing — Android and iOS (OWASP MASVS)',
      'External and internal network penetration testing',
      'Wireless and Active Directory assessments',
      'Black-box, grey-box and white-box approaches',
      'CVSS-scored report, remediation guidance and retest',
    ],
    'cta'      => 'Get a free VAPT consultation',
  ],
  [
    'slug'     => 'audits',
    'title'    => 'Security Audits',
    'short'    => 'Security Audit',
    'line'     => 'Independent review of your controls, configurations and policies against recognised standards.',
    'tagline'  => 'An independent view of where you stand.',
    'body'     => 'We review your security controls, configurations, policies and processes against recognised frameworks, then give you a prioritised plan to close the gaps.',
    'includes' => [
      'IT general controls and infrastructure audits',
      'Firewall, server, endpoint and network device configuration reviews',
      'Access control and privileged account reviews',
      'Policy and procedure review',
      'Internal audit support and third-party / vendor risk assessments',
      'Audit report with risk ratings and management action plan',
    ],
  ],
  [
    'slug'     => 'testing',
    'title'    => 'Security Testing',
    'short'    => 'Security Testing',
    'line'     => 'Application, API, source-code and configuration testing built into your release cycle.',
    'tagline'  => 'Security built into every release.',
    'body'     => 'We test applications and code continuously, so issues are caught in development rather than in production.',
    'includes' => [
      'Secure source-code review (manual and SAST)',
      'Dynamic application security testing (DAST)',
      'Secure SDLC and DevSecOps integration',
      'Pre-release and post-release security testing',
      'Developer secure-coding workshops',
    ],
  ],
  [
    'slug'     => 'vciso',
    'title'    => 'Virtual CISO (vCISO)',
    'short'    => 'Virtual CISO',
    'line'     => 'Senior security leadership on demand — strategy, governance and board reporting without a full-time hire.',
    'tagline'  => 'Security leadership, without the full-time cost.',
    'body'     => 'Our vCISO service gives you an experienced security leader who sets strategy, builds your programme and reports to your board — on a retainer that fits your size.',
    'includes' => [
      'Security strategy and 12-month roadmap',
      'Risk assessment and risk register',
      'Policies, standards and governance framework',
      'Board and management reporting',
      'Incident response planning and tabletop exercises',
      'Vendor and third-party security oversight',
      'Security awareness programme for staff',
    ],
  ],
  [
    'slug'     => 'compliance',
    'title'    => 'Compliance & Certification',
    'short'    => 'Compliance & Certification',
    'line'     => 'Gap analysis, documentation and audit readiness for ISO 27001, SOC 2, PCI DSS, DPDP Act and more.',
    'tagline'  => 'From gap to certificate.',
    'body'     => 'We guide you through every stage of compliance — assessing gaps, writing documentation, implementing controls and preparing you for the external audit.',
    'includes' => [
      'ISO/IEC 27001 implementation and certification readiness',
      'SOC 2 Type I and Type II readiness',
      'PCI DSS readiness',
      'Digital Personal Data Protection (DPDP) Act, 2023 compliance',
      'RBI, SEBI and CERT-In security guideline alignment',
      'GDPR and HIPAA readiness for global clients',
      'Gap assessment, policy documentation, internal audit and audit-day support',
    ],
    'cta'      => 'Start your ISO 27001 journey',
  ],
  [
    'slug'     => 'cloud',
    'title'    => 'Cloud Security',
    'short'    => 'Cloud Security',
    'line'     => 'Configuration reviews and hardening for AWS, Azure and Google Cloud.',
    'tagline'  => 'Secure configuration from day one.',
    'body'     => 'Most cloud breaches start with a misconfiguration. We review and harden your AWS, Azure and Google Cloud environments against CIS Benchmarks and provider best practice.',
    'includes' => [
      'Cloud configuration and posture review',
      'Identity and access management (IAM) review',
      'Container and Kubernetes security',
      'Cloud penetration testing',
      'Hardening guidance and remediation support',
    ],
  ],
  [
    'slug'     => 'soc',
    'title'    => 'Managed Security & SOC',
    'short'    => 'Managed Security / SOC',
    'line'     => 'Monitoring, threat detection and incident response support.',
    'tagline'  => 'Eyes on your environment.',
    'body'     => 'We help you detect threats early and respond fast, through monitoring, SIEM setup and incident response support.',
    'includes' => [
      'SIEM deployment and tuning (e.g. Microsoft Sentinel)',
      'Endpoint detection and response (EDR) management',
      'Log monitoring and alert triage',
      'Threat hunting',
      'Incident response and digital forensics support',
    ],
  ],
  [
    'slug'     => 'ai-iot',
    'title'    => 'AI, IoT & Embedded Security',
    'short'    => 'AI, IoT & Embedded Security',
    'line'     => 'Testing for ML models, connected devices, firmware and drones.',
    'tagline'  => 'Security for the systems we know best.',
    'body'     => 'As builders of AI, IoT and embedded systems, we test them the way they are attacked — from model manipulation to firmware extraction.',
    'includes' => [
      'AI / LLM application security testing (prompt injection, data leakage, model abuse)',
      'IoT device and firmware security assessment',
      'Drone and UAV communication security',
      'Hardware interface testing (UART, JTAG)',
      'Secure-by-design architecture reviews',
    ],
  ],
];
