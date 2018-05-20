class Plan
  PLANS = [:free,:standard,:enterprise]

  def self.options
    PLANS.map{|plan|[plan.capitalize,plan]}
  end
end
